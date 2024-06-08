<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use function Roots\bundle;


class BackendStylingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        /**
         * Enqueue backend styling
         * 
         * @since 1.0.0
         * @return void
         */
        add_action('admin_enqueue_scripts', function (): void {

            bundle('admin')->enqueue();
        }, 100);

        /**
         * Enqueue login styling
         * 
         * @since 1.0.0
         * @return void
         */
        add_action('login_enqueue_scripts', function (): void {
            bundle('login')->enqueue();
        }, 100);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        add_action('after_setup_theme', function () {
            add_theme_support('wp-block-styles');
        });
    }
}
