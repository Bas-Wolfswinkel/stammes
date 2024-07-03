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
            [
                'type' => 'flexible_content',
                'name' => 'page_content',
                'label' => 'Page Content',
                'instructions' => 'Add content to the page',
                'layout' => 'block',
                'button_label' => 'Add Content',
                'min' => 1,
                'layouts' => [
                    PageFields::heroLayout(),
                    PageFields::spaceLayout(),
                    [
                        'type' => 'group',
                        'name' => 'project_details',
                        'label' => 'Project Details',
                        'sub_fields' => [
                            [
                                'type' => 'gallery',
                                'name' => 'gallery',
                                'label' => 'Gallerij',
                            ]
                        ],
                    ],
                    PageFields::projectsLayout(),
                ],
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
        return [];
    }
}
