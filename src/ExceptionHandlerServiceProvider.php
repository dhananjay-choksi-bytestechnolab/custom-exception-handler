<?php

namespace BytesTechnoLab\ExceptionHandler;

use Illuminate\Support\ServiceProvider;
use BytesTechnoLab\CustomExceptionHandler;

class ExceptionHandlerServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register your package's services or bindings here, if any.
    }

    public function boot()
    {
        // This is where you can register your custom exception handling.
        // For example, you can override Laravel's default exception handler.
        $this->app->singleton(\Illuminate\Contracts\Debug\ExceptionHandler::class, CustomExceptionHandler::class);
    }
}
