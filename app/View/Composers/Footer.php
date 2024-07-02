<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Footer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = ['sections.footer'];

    public function with()
    {
        return [
            'services' => get_posts(['post_type' => 'service', 'posts_per_page' => -1]),
            'contact_arr' => [
                'phone' => get_field('phone', 'option'),
                'adress' => get_field('adress', 'option'),
                'postal_city' => get_field('postal_city', 'option'),
                'email' => get_field('email', 'option'),
            ],
        ];
    }
}
