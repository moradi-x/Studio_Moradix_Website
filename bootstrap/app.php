<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use App\Http\Middleware\TrackSiteVisit;
use App\Http\Middleware\RequestIdMiddleware;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function ($middleware) {

        $middleware->web(
            append: [
                RequestIdMiddleware::class,
                TrackSiteVisit::class,
            ]
        );
    })
    ->withExceptions(function (Exceptions $exceptions): void {

        $exceptions->context(fn() => [
            'request_id' => request()->attributes->get('request_id'),
        ]);

        $exceptions->render(function (
            \Illuminate\Http\Exceptions\PostTooLargeException $e,
            \Illuminate\Http\Request $request
        ) {
            if ($request->is('admin/projects') && $request->isMethod('POST')) {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'حجم عکس انتخاب‌شده بیشتر از حد مجاز است. لطفاً عکس کوچک‌تری انتخاب کنید.');
            }
        });

        $exceptions->report(function (Throwable $e) {

            if ($e instanceof \Illuminate\Database\QueryException) {

                \Illuminate\Support\Facades\Log::channel('operations')->error(
                    'Database query exception',
                    [
                        'exception' => get_class($e),
                        'message' => 'Database query failed.',
                        'file' => $e->getFile(),
                        'line' => $e->getLine(),
                        'request_id' => request()->attributes->get('request_id'),
                    ]
                );
            }
        });
    })->create();
