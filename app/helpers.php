<?php

/**
 * Theme helpers.
 */

namespace App;

class Helper
{
    public static function title(string $title = null): array|string
    {
        if (is_null($title)) {
            $title = get_sub_field('title') ?? 'Default Title';
        }
        $title = str_replace('<gold>', '<span class="text-gold font-bold">', $title);
        $title = str_replace('</gold>', '</span>', $title);
        $title = str_replace('<green>', '<span class="text-green font-bold">', $title);
        $title = str_replace('</green>', '</span>', $title);
        $title = str_replace('<bold>', '<span class="font-bold">', $title);

        return str_replace('</bold>', '</span>', $title);
    }

    /**
     * Get the colorpicker value from the ACF field.
     * Pass the group array if you want to get the value from a specific group since we would need to use array keys instead of get_sub_field
     *
     */
    public static function get_colorpicker(string $name, ?array $group = null): ?string
    {
        $colorData = $group[$name] ?? (get_sub_field($name) ?? null);

        if (! $colorData || ! is_array($colorData)) {
            return null;
        }

        $choice = $colorData["{$name}_choice"] ?? null;
        $customChoice = $colorData["{$name}_custom_choice"] ?? null;

        return $choice === 'custom' ? $customChoice : $choice;
    }
}
