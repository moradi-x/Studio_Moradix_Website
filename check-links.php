
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

$brokenLinks = [];
$totalLinks = 0;

foreach ($pages as $page) {

    echo "Checking: $page\n";

    $html = @file_get_contents($page);

    if ($html === false) {
        echo "PAGE ERROR: $page\n";
        continue;
    }

    $dom = new DOMDocument();

    libxml_use_internal_errors(true);

    $dom->loadHTML('<?xml encoding="UTF-8">' . $html);

    foreach ($dom->getElementsByTagName('a') as $link) {

        $href = trim($link->getAttribute('href'));

        if ($href === '' ||
            str_starts_with($href, '#') ||
            str_starts_with($href, 'mailto:') ||
            str_starts_with($href, 'tel:') ||
            str_starts_with($href, 'javascript:')) {
            continue;
        }

        $totalLinks++;

        if (str_starts_with($href, '/')) {
            $url = $base . $href;
        } elseif (preg_match('/^https?:\/\//i', $href)) {
            $url = $href;
        } else {
            continue;
        }

        $headers = @get_headers($url);

        if ($headers === false) {
            $brokenLinks[] = [
                'page' => $page,
                'url' => $url,
                'status' => 'Connection Error'
            ];
            continue;
        }

        $status = 0;

        foreach ($headers as $header) {
            if (preg_match('/^HTTP\/\S+\s+(\d+)/', $header, $matches)) {
                $status = (int) $matches[1];
            }
        }

        if ($status >= 400 || $status === 0) {
            $brokenLinks[] = [
                'page' => $page,
                'url' => $url,
                'status' => $status
            ];
        }
    }
}

echo "\n========== REPORT ==========\n";

echo "Pages scanned: " . count($pages) . PHP_EOL;
echo "Total links checked: " . $totalLinks . PHP_EOL;
echo "Broken links: " . count($brokenLinks) . PHP_EOL;

foreach ($brokenLinks as $item) {
    echo "\nPAGE: {$item['page']}\n";
    echo "URL: {$item['url']}\n";
    echo "STATUS: {$item['status']}\n";
}
