<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

use App\Models\Villa;
use App\Models\Setting;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer(
            '*',
            function ($view) {

                $view->with([
                    'globalVilla' =>
                    Villa::first(),

                    'globalSetting' =>
                    Setting::first(),
                ]);
            }
        );
    }
}
