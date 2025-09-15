<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
  ->withMiddleware(function (Middleware $middleware) {
    $middleware->alias([
    // Protege rutas para que sean accesibles por usuario con un rol específico
    'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
    // Restringe el acceso a rutas basándose en permisos específicos
    'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
    // Permite el acceso si el usuario tiene al menos uno de los roles o permisos especificados
     'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,

    ]);   
})


    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
