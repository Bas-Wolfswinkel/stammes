<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Masterminds\HTML5;

class BlocksServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        /**
         * Render `core/button` block with Blade template
         */
        add_filter('render_block', function ($block_content, array $block) {
            if ($block['blockName'] === 'core/button') {
                $html5 = new HTML5();
                $dom = $html5->loadHTML($block_content);
                $classes = $dom->getElementsByTagName('a')->item(0)->getAttribute('class');
                $href = $dom->getElementsByTagName('a')->item(0)->getAttribute('href');
                $text = $dom->getElementsByTagName('a')->item(0)->textContent;
                $variant = 'primary';

                if (
                    isset($block['attrs']['className']) &&
                    str_contains((string) $block['attrs']['className'], 'is-style-outline')
                ) {
                    $variant = 'outline';
                }

                return view('blocks.button', [
                    'variant' => $variant,
                    'classes' => $classes,
                    'href' => $href ?? null,
                    'text' => $text ?? null,
                ]);
            }

            return $block_content;
        }, 10, 2);

        /**
         * Render `radicle/modal` block with Blade template
         */
        add_filter('render_block', function ($block_content, array $block) {
            if ($block['blockName'] === 'radicle/modal') {
                return view('blocks.modal', [
                    'block' => $block,
                    'blockContent' => $block_content,
                    'buttonText' => $block['attrs']['buttonText'] ?? null,
                    'heading' => $block['attrs']['heading'] ?? null,
                ]);
            }

            return $block_content;
        }, 10, 2);
    }
}
