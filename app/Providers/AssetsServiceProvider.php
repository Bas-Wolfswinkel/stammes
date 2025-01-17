<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use function Roots\bundle;

class AssetsServiceProvider extends ServiceProvider
{
    /**
     * Register assets services.
     */
    public function register(): void
    {
        /**
         * Register the theme assets.
         *
         * @return void
         */
        add_action(
            'wp_enqueue_scripts',
            function (): void {
                bundle('app')->enqueue();

                remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
            },
            100
        );

        /**
         * Register the theme assets with the block editor.
         *
         * @return void
         */
        add_action(
            'enqueue_block_editor_assets',
            function (): void {
                bundle('editor')->enqueue();
            },
            100
        );

        /**
         * Use theme.json from the build directory
         *
         * @param  string $path
         * @param  string $file
         * @return string
         */
        add_filter(
            'theme_file_path',
            function (string $path, string $file): string {
                if ($file === 'theme.json') {
                    return public_path() . '/dist/theme.json';
                }

                return $path;
            },
            10,
            2
        );

        /**
         * Add the type="module" attribute to script tags that have the .mjs extension.
         *
         * @param  string $tag
         * @return string
         */
        add_filter(
            'script_loader_tag',
            function (string $tag): string {
                $hasModuleExtension = str_contains($tag, '.mjs"');

                $hasModuleAttribute = array_filter(['type="module"', 'type=module', "type='module'"], fn ($value): bool => str_contains($tag, $value)) !== [];
                #
                if (! $hasModuleExtension || $hasModuleAttribute) {
                    return $tag;
                }

                return str_replace(' src=', ' type=module src=', $tag);
            },
            10,
            2
        );

        /**
         * Remove default theme.json styles.
         *
         * @link   https://developer.wordpress.org/block-editor/reference-guides/filters/global-styles-filters/
         * @return void
         */
        add_action('after_setup_theme', function (): void {
            if (is_admin()) {
                return;
            }

            add_filter('wp_theme_json_data_default', fn (\WP_Theme_JSON_Data $wpThemeJSONData): \WP_Theme_JSON_Data => new \WP_Theme_JSON_Data([]));
        });
    }
}
