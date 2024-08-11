<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\ListTodos;
use App\Console\Commands\AddTodo;
use App\Console\Commands\DeleteTodo;
use App\Console\Commands\CompleteTodo;
use App\Console\Commands\AllTodo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ListTodos::class,
                AddTodo::class,
                DeleteTodo::class,
                CompleteTodo::class,
                AllTodo::class,
            ]);
        }
    }
}
