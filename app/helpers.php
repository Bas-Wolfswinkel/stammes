<?php

/**
 * Theme helpers.
 */

namespace App;

class Helper
{
    static function title(string $title = null)
    {
        if (is_null($title)) {
            $title = get_sub_field('title') ?? 'Default Title';
        }
        $title = str_replace('<gold>', '<span class="text-gold font-bold">', $title);
        $title = str_replace('</gold>', '</span>', $title);
        $title = str_replace('<green>', '<span class="text-green font-bold">', $title);
        $title = str_replace('</green>', '</span>', $title);
        $title = str_replace('<bold>', '<span class="font-bold">', $title);
        $title = str_replace('</bold>', '</span>', $title);

        return $title;
    }
}
