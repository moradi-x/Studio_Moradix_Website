<?php

$base = 'http://localhost:8000';

libxml_use_internal_errors(true);

$xml = simplexml_load_file($base . '/sitemap.xml');

if (!$xml) {
    die("Sitemap could not be loaded.\n");
}

$results = [];
$titleCounts = [];
$descriptionCounts = [];

foreach ($xml->url as $item) {

    $url = (string) $item->loc;

    echo "Checking: $url\n";

    $context = stream_context_create([
        'http' => [
            'timeout' => 5,
            'ignore_errors' => true
        ]
    ]);

    $html = @file_get_contents($url, false, $context);

    if ($html === false) {
        echo "PAGE ERROR: $url\n";
        continue;
    }

    $dom = new DOMDocument();
    $dom->loadHTML('<?xml encoding="UTF-8">' . $html);

    $xpath = new DOMXPath($dom);

    $title = trim($xpath->evaluate('string(//title)'));

    $description = trim(
        $xpath->evaluate(
            'string(//meta[translate(@name,"ABCDEFGHIJKLMNOPQRSTUVWXYZ","abcdefghijklmnopqrstuvwxyz")="description"]/@content)'
        )
    );

    $results[] = [
        'url' => $url,
        'title' => $title,
        'description' => $description
    ];

    if ($title !== '') {
        $titleCounts[$title] = ($titleCounts[$title] ?? 0) + 1;
    }

    if ($description !== '') {
        $descriptionCounts[$description] =
            ($descriptionCounts[$description] ?? 0) + 1;
    }
}

echo "\n========== META REPORT ==========\n";

echo "Pages checked: " . count($results) . PHP_EOL;

foreach ($results as $result) {

    echo "\nURL: " . $result['url'] . PHP_EOL;
    echo "TITLE: " . ($result['title'] ?: '[EMPTY]') . PHP_EOL;
    echo "DESCRIPTION: " . ($result['description'] ?: '[EMPTY]') . PHP_EOL;
}

echo "\n========== EMPTY META ==========\n";

foreach ($results as $result) {

    if ($result['title'] === '') {
        echo "EMPTY TITLE: " . $result['url'] . PHP_EOL;
    }

    if ($result['description'] === '') {
        echo "EMPTY DESCRIPTION: " . $result['url'] . PHP_EOL;
    }
}

echo "\n========== DUPLICATE TITLES ==========\n";

foreach ($titleCounts as $title => $count) {
    if ($count > 1) {
        echo "$count times: $title\n";
    }
}

echo "\n========== DUPLICATE DESCRIPTIONS ==========\n";

foreach ($descriptionCounts as $description => $count) {
    if ($count > 1) {
        echo "$count times: $description\n";
    }
}