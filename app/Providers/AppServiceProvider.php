<?php

namespace App\Providers;

use App\Interface\ReportInterface;
use App\Reports\ReportByMonth;
use App\Reports\TestReportByMonth;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {

        /**
         * Never Depend on anything concrete, only depend on abstractions.
         *
         * High level Modules should not depend on low level modules. They should depends on abstractions.
         *
         * Able to change an implementation easily without altering the hight level code.
         */
        if (App::environment(['local', 'staging'])) {
            $this->app->bind(ReportInterface::class, TestReportByMonth::class);
        } else {
            $this->app->bind(ReportInterface::class, ReportByMonth::class);
        }

    }

}
