<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Post Types
    |--------------------------------------------------------------------------
    |
    | Post types to be registered with Extended CPTs
    | <https://github.com/johnbillion/extended-cpts>
    |
    */

    'post_types' => [
        'project' => [
            'menu_icon' => 'dashicons-admin-customizer',
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
            'show_in_rest' => true,
            'names' => [
                'singular' => 'Project',
                'plural' => 'Projecten',
                'slug' => 'projecten',
            ]
        ],
        'service' => [
            'menu_icon' => 'dashicons-admin-customizer',
            'supports' => ['title', 'editor', 'thumbnail'],
            'show_in_rest' => true,
            'names' => [
                'singular' => 'Service',
                'plural' => 'Services',
                'slug' => 'services',
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Taxonomies
    |--------------------------------------------------------------------------
    |
    | Taxonomies to be registered with Extended CPTs library
    | <https://github.com/johnbillion/extended-cpts>
    |
    */

    'taxonomies' => [
        'seed_category' => [
            'post_types' => ['seed'],
            'meta_box' => 'radio',
            'names' => [
                'singular' => 'Category',
                'plural' => 'Categories',
            ],
        ],
    ],
];
