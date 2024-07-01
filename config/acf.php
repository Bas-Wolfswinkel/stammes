<?php

return [
    /*
    |--------------------------------------------------------------------------
    | ACF
    |--------------------------------------------------------------------------
    |
    | Advanced Custom Fields is a great plugin for adding custom fields to
    | WordPress. You can find out more about ACF at the following URL:
    | https://www.advancedcustomfields.com
    |
    */

    /**
     * Add options pages
     */
    'options_pages' => [
        [
            'page_title' => 'Theme Settings',
            'menu_title' => 'Theme Settings',
            'menu_slug' => 'theme-settings',
            'capability' => 'edit_posts',
            'redirect' => true,
            'sub_pages' => [
                [
                    'page_title' => __('General Settings'),
                    'menu_title' => __('General'),
                    'slug' => 'general-settings',
                    'parent_slug' => 'theme-settings',
                ],
                [
                    'page_title' => __('Contact info'),
                    'menu_title' => __('Contact info'),
                    'slug' => 'contact-settings',
                    'parent_slug' => 'theme-settings',
                ],
            ],
        ],
    ],
];
