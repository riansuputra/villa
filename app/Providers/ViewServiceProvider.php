<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\Villa;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer(
            '*',
            function ($view) {

                $view->with([
                    'globalVilla' => Villa::first(),

                    'globalSetting' => Setting::first(),
                ]);
            }
        );
    }
}
