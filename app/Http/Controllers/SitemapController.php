<?php

namespace App\Http\Controllers;

use App\Models\Project;

class SitemapController extends Controller
{
    public function index()
    {
        $baseUrl = rtrim(config('app.url'), '/');

        $pages = [
            ['fa' => '/', 'en' => '/en'],
            ['fa' => '/about', 'en' => '/en/about'],
            ['fa' => '/contact', 'en' => '/en/contact'],
            ['fa' => '/pricing', 'en' => '/en/pricing'],
            ['fa' => '/portfolio', 'en' => '/en/portfolio'],
            ['fa' => '/services', 'en' => '/en/services'],
            ['fa' => '/services/web-design', 'en' => '/en/services/web-design'],
            ['fa' => '/services/ecommerce', 'en' => '/en/services/ecommerce'],
            ['fa' => '/services/seo', 'en' => '/en/services/seo'],
            ['fa' => '/services/redesign', 'en' => '/en/services/redesign'],
            ['fa' => '/services/custom-systems', 'en' => '/en/services/custom-systems'],
        ];

        $urls = [];

        foreach ($pages as $page) {
            $faUrl = $baseUrl . $page['fa'];
            $enUrl = $baseUrl . $page['en'];

            $urls[] = [
                'loc' => $faUrl,
                'alternates' => [
                    'fa' => $faUrl,
                    'en' => $enUrl,
                    'x-default' => $faUrl,
                ],
            ];

            $urls[] = [
                'loc' => $enUrl,
                'alternates' => [
                    'fa' => $faUrl,
                    'en' => $enUrl,
                    'x-default' => $faUrl,
                ],
            ];
        }

        $projects = Project::query()
            ->where(function ($query) {
                $query->where(function ($q) {
                    $q->whereNotNull('slug')
                        ->where('slug', '!=', '');
                })->orWhere(function ($q) {
                    $q->whereNotNull('slug_en')
                        ->where('slug_en', '!=', '');
                });
            })
            ->get(['slug', 'slug_en', 'updated_at']);

        foreach ($projects as $project) {
            $hasFa = filled($project->slug);
            $hasEn = filled($project->slug_en);

            $faUrl = $hasFa
                ? $baseUrl . '/portfolio/' . rawurlencode($project->slug)
                : null;

            $enUrl = $hasEn
                ? $baseUrl . '/en/portfolio/' . rawurlencode($project->slug_en)
                : null;

            $lastmod = $project->updated_at?->toAtomString();

            $alternates = [];

            // فقط وقتی هر دو نسخه وجود دارند، hreflang بساز.
            if ($hasFa && $hasEn) {
                $alternates = [
                    'fa' => $faUrl,
                    'en' => $enUrl,
                    'x-default' => $faUrl,
                ];
            }

            // نسخه فارسی
            if ($hasFa) {
                $urls[] = [
                    'loc' => $faUrl,
                    'lastmod' => $lastmod,
                    'alternates' => $alternates,
                ];
            }

            // نسخه انگلیسی
            if ($hasEn) {
                $urls[] = [
                    'loc' => $enUrl,
                    'lastmod' => $lastmod,
                    'alternates' => $alternates,
                ];
            }
        }

        return response()
            ->view('sitemap.index', compact('urls'))
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
