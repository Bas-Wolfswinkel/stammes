<?php

namespace App\Acf;

use OutlawzTeam\Radicle\Support\Acf;

class ProjectFields extends Acf
{
    /**
     * ACF key
     */
    protected $key = 'project_fields';

    /**
     * ACF title
     */
    protected $title = 'Project';

    /**
     * ACF fields
     */
    public function fields()
    {
        return [
            [
                'type' => 'text',
                'name' => 'location',
                'label' => 'Locatie',
            ],

        ];
    }

    /**
     * ACF Location
     */
    public function location()
    {
        return [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'project',
                ],
            ],
        ];
    }

    /**
     * ACF Options
     */
    public function options()
    {
        return [
            'hide_on_screen' => [
                'the_content',
            ],
        ];
    }
}
