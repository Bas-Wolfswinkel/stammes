<?php

/**
 * Theme helpers.
 */

namespace App;

class Helper
{
    /**
     * Replace the title tags with the correct HTML tags.
     * /i = case-insensitive matching
     */
    public static function title(?string $title = null): string
    {
        if (is_null($title)) {
            $title = get_sub_field('title') ?? 'Default Title';
        }

        $replacements = [
            '/<gold>/i' => '<span class="text-gold font-bold">',
            '/<\/gold>/i' => '</span>',
            '/<green>/i' => '<span class="text-green font-bold">',
            '/<\/green>/i' => '</span>',
            '/<bold>/i' => '<span class="font-bold">',
            '/<\/bold>/i' => '</span>',
            '/\[breek\]/i' => '&shy;',
        ];

        return preg_replace(array_keys($replacements), array_values($replacements), $title);
    }

    /**
     * Get the colorpicker value from the ACF field.
     * Pass the group array if you want to get the value from a specific group since we would need to use array keys instead of get_sub_field
     *
     */
    public static function get_colorpicker(string $name, ?array $group = null): ?string
    {
        $colorData = $group[$name] ?? (get_sub_field($name) ?? null);

        if (!$colorData || !is_array($colorData)) {
            return null;
        }

        $choice = $colorData["{$name}_choice"] ?? null;
        $customChoice = $colorData["{$name}_custom_choice"] ?? null;
        $customRgb = $colorData["{$name}_custom_rgb"] ?? null;

        return $choice === 'custom' ? $customChoice : $choice;
    }
}
