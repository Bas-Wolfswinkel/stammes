<?php

namespace App\Providers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;
use Roots\Acorn\Sage\SageServiceProvider;

class ThemeServiceProvider extends SageServiceProvider
{
    /**
     * Register theme services.
     */
    public function register(): void
    {
        parent::register();

        /**
         * Register theme support and navigation menus from the theme config.
         *
         * @return void
         */
        add_action(
            'after_setup_theme',
            function (): void {
                Collection::make(config('theme.support'))->map(fn ($params, $feature): array => is_array($params) ? [$feature, $params] : [$params])->each(fn ($params) => add_theme_support(...$params));

                Collection::make(config('theme.remove'))->map(fn ($entry): mixed => is_string($entry) ? [$entry] : $entry)->each(fn ($params) => remove_theme_support(...$params));

                register_nav_menus(config('theme.menus'));

                Collection::make(config('theme.image_sizes'))->each(fn ($params, $name) => add_image_size($name, ...$params));
            },
            20
        );

        /**
         * Register sidebars from the theme config.
         *
         * @return void
         */
        add_action('widgets_init', function (): void {
            Collection::make(config('theme.sidebar.register'))->map(fn ($instance) => register_sidebar(array_merge(config('theme.sidebar.config'), $instance)));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        parent::boot();

        add_filter('wp_head', function (): void {
            echo Blade::render('@livewireStyles');
        });

        add_filter('wp_footer', function (): void {
            echo Blade::render('@livewireScripts');
        });
    }
}
