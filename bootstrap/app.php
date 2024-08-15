<?php

use App\Http\Middleware\ValidarPermissoes;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Session\Middleware\StartSession;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: [
            '/storage/*'
        ]);
        $middleware->alias([
            'permissoes'=>ValidarPermissoes::class
        ]);
        $middleware->api(prepend:[
            ValidarPermissoes::class
        ]);
        $middleware->web(remove: [
            StartSession::class,
            Illuminate\View\Middleware\ShareErrorsFromSession::class,
            Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class,
            Illuminate\Session\Middleware\AuthenticateSession::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->withSchedule(function (Schedule $schedule)
    {
        $schedule->command('emails:avisar-prazos')->daily();
    })
    ->create();
