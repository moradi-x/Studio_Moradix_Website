
<?php

$base = 'http://localhost:8000';

$xml = simplexml_load_file($base . '/sitemap.xml');

if (!$xml) {
    die("Sitemap could not be loaded.\n");
}

$pages = [];

foreach ($xml->url as $item) {
    $pages[] = (string) $item->loc;
}

$missingAlt = [];
$emptyAlt = [];
$totalImages = 0;

libxml_use_internal_errors(true);

foreach ($pages as $page) {
    $html = @file_get_contents($page);

    if ($html === false) {
        echo "PAGE ERROR: $page\n";
        continue;
    }

    $dom = new DOMDocument();
    $dom->loadHTML('<?xml encoding="UTF-8">' . $html);

    foreach ($dom->getElementsByTagName('img') as $img) {
        $totalImages++;

        $src = $img->getAttribute('src');

        if (!$img->hasAttribute('alt')) {
            $missingAlt[] = [
                'page' => $page,
                'src' => $src,
            ];
        } elseif (
            trim($img->getAttribute('alt')) === '' &&
            !$img->hasAttribute('data-gallery-preview')
        ) {
            echo "IMAGE HTML: " . $dom->saveHTML($img) . PHP_EOL;
            $emptyAlt[] = [
                'page' => $page,
                'src' => $src,
            ];
        }
    }
}

echo "Pages scanned: " . count($pages) . PHP_EOL;
echo "Total images: " . $totalImages . PHP_EOL;
echo "Images without alt attribute: " . count($missingAlt) . PHP_EOL;
echo "Images with empty alt: " . count($emptyAlt) . PHP_EOL;

echo "\n--- MISSING ALT ---\n";

foreach ($missingAlt as $item) {
    echo "PAGE: {$item['page']}\n";
    echo "IMAGE: {$item['src']}\n\n";
}

echo "\n--- EMPTY ALT ---\n";

foreach ($emptyAlt as $item) {
    echo "PAGE: {$item['page']}\n";
    echo "IMAGE: {$item['src']}\n\n";
}
