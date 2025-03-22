<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->renderable(function (Throwable $e, Request $request) {
            // Si la petición espera JSON (tiene el header Accept: application/json)
            // o está en la ruta /api, devolver respuesta JSON
            if ($request->expectsJson() || $request->is('api/*')) {
                if ($e instanceof NotFoundHttpException) {
                    return response()->json(['error' => 'No encontrado'], 404);
                }

                $status = 500;
                if ($e instanceof HttpException) {
                    $status = $e->getStatusCode();
                }

                return response()->json([
                    'error' => $e->getMessage()
                ], $status);
            }
        });
    }
}
