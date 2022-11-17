<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\TestApi;
use App\Services\TransactionService;
use App\Http\Controllers\APIUserController;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TestApi::class, TransactionService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
