<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Settings;
use Config;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('settings', function ($app) {
            return new Settings();
        });

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Settings', Settings::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // only use the Settings package if the Settings table is present in the database
        if (!\App::runningInConsole() && count(Schema::getColumnListing('settings'))) {
            $settings = Settings::all();
            foreach ($settings as $key => $setting)
            {
                Config::set('settings.'.$setting->key, $setting->value);
            }
        }
    }
}
