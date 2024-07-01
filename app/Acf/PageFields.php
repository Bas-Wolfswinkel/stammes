<?php

namespace App\Acf;

use OutlawzTeam\Radicle\Support\Acf;

class PageFields extends Acf
{
    /**
     * ACF key
     */
    protected $key = 'page_fields';

    /**
     * ACF title
     */
    protected $title = 'Page Content';

    /**
     * ACF fields
     */
    public function fields()
    {
        return [
            [
                'type' => 'flexible_content',
                'name' => 'page_content',
                'label' => 'Page Content',
                'instructions' => 'Add content to the page',
                'layout' => 'block',
                'button_label' => 'Add Content',
                'min' => 1,
                'layouts' => [
                    [
                        'type' => 'group',
                        'name' => 'hero',
                        'label' => 'Hero',
                        'sub_fields' => [
                            [
                                'type' => 'number',
                                'name' => 'max_width_desktop',
                                'label' => 'Max Width (Desktop)',
                                'instructions' => 'The max width of the hero title for desktop',
                                'default_value' => '1200px',
                                'append' => 'px',
                                'wrapper' => [
                                    'width' => '50%',
                                ],
                            ],
                            [
                                'type' => 'number',
                                'name' => 'max_width_mobile',
                                'label' => 'Max Width (Mobile)',
                                'instructions' => 'The max width of the hero title for mobile',
                                'default_value' => '768px',
                                'append' => 'px',
                                'wrapper' => [
                                    'width' => '50%',
                                ],
                            ],
                            [
                                'name' => 'hero_title',
                                'label' => 'Hero Title',
                                'type' => 'textarea',
                                'default_value' => 'The title of the hero section, use these colors to style the title: <gold>, you can also use <bold>',
                            ],
                            [
                                'name' => 'link',
                                'label' => 'Link',
                                'type' => 'link',
                            ],
                            [
                                'name' => 'image',
                                'label' => 'Image',
                                'type' => 'image',
                                'instructions' => 'The image for the hero section',
                                'wrapper' => [
                                    'width' => '50%',
                                ],
                            ],
                            [
                                'name' => 'image_mobile',
                                'label' => 'Image Mobile (optional)',
                                'type' => 'image',
                                'instructions' => 'The image for the hero section on mobile',
                                'wrapper' => [
                                    'width' => '50%',
                                ],
                            ],
                        ],
                    ],
                    self::spaceLayout(),
                    [
                        'type' => 'group',
                        'name' => 'wij_zijn_stammes',
                        'label' => 'Wij zijn Stammes',
                        'sub_fields' => [
                            self::titleField(),
                            [
                                'type' => 'wysiwyg',
                                'name' => 'content',
                                'label' => 'Content',
                            ],
                            [
                                'type' => 'link',
                                'name' => 'link',
                                'label' => 'Link',
                            ],
                            [
                                'type' => 'image',
                                'name' => 'image',
                                'label' => 'Image',
                            ],
                        ]
                    ],
                    [
                        'type' => 'group',
                        'name' => 'usps',
                        'label' => 'USPs',
                        'sub_fields' => [
                            self::titleField(),
                            [
                                'type' => 'wysiwyg',
                                'name' => 'content',
                                'label' => 'Content',
                            ],
                            [
                                'type' => 'link',
                                'name' => 'link',
                                'label' => 'Link',
                            ],
                            [
                                'type' => 'repeater',
                                'name' => 'usps',
                                'label' => 'USPs',
                                'layout' => 'block',
                                'button_label' => 'Add USP',
                                'min' => 1,
                                'sub_fields' => [
                                    [
                                        'type' => 'image',
                                        'name' => 'image',
                                        'label' => 'Image',
                                    ],
                                    [
                                        'type' => 'text',
                                        'name' => 'usp',
                                        'label' => 'USP',
                                    ],
                                ],
                            ],
                        ]
                    ],
                    [
                        'type' => 'group',
                        'name' => 'projecten',
                        'label' => 'Projecten',
                        'sub_fields' => [
                            self::titleField(),
                            [
                                'type' => 'relationship',
                                'name' => 'projecten',
                                'label' => 'Projecten',
                                'instructions' => 'Selecteer de projecten die je wilt tonen',
                                'post_type' => 'project',
                                'min' => 1,
                            ],
                        ],
                    ],
                    [
                        'type' => 'group',
                        'name' => 'vrijblijvend_contact',
                        'label' => 'Vrijblijvend contact',
                        'sub_fields' => [
                            self::titleField(),
                            [
                                'type' => 'wysiwyg',
                                'name' => 'content',
                                'label' => 'Content',
                            ],
                            [
                                'type' => 'text',
                                'name' => 'contactform_shortcode',
                                'label' => 'Contactformulier shortcode',
                                'instructions' => 'Voeg hier het shortcode van het contactformulier in',
                            ],
                        ],
                    ],
                    [
                        'type' => 'group',
                        'name' => 'waarom_stammes',
                        'label' => 'Waarom Stammes',
                        'sub_fields' => [
                            [
                                'type' => 'image',
                                'name' => 'image',
                                'label' => 'Image',
                            ],
                            self::titleField(),
                            [
                                'type' => 'wysiwyg',
                                'name' => 'content',
                                'label' => 'Content',
                            ],
                        ],
                    ],
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
                    'value' => 'page',
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
            'position' => 'normal',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
        ];
    }


    /**
     * Generate space layout
     */
    public static function spaceLayout(): array
    {
        $spaceLayout = [
            'name' => 'space',
            'label' => 'Space',
            'display' => 'block',
            'sub_fields' => [],
        ];

        $spaceChoices = [
            '32px' => '32px',
            '40px' => '40px',
            '48px' => '48px',
            '56px' => '56px',
            '64px' => '64px',
            '68px' => '68px',
            '80px' => '80px',
            '88px' => '88px',
            '96px' => '96px',
            '120px' => '120px',
            '136px' => '136px',
            '180px' => '180px',
            '208px' => '208px',
        ];

        $deviceGroups = [
            'mobile' => 'Mobile',
            'tablet' => 'Tablet',
            'laptop' => 'Laptop',
            'desktop' => 'Desktop',
        ];

        foreach ($deviceGroups as $device => $label) {
            $spaceLayout['sub_fields'][] = [
                'type' => 'group',
                'name' => 'space_group_' . $device,
                'wrapper' => ['width' => '25%'],
                'sub_fields' => [
                    [
                        'label' => $label . ' Space',
                        'name' => $device . '_space',
                        'type' => 'select',
                        'default_value' => '24px',
                        'choices' => $spaceChoices,
                    ],
                ],
            ];
        }
        return $spaceLayout;
    }

    public function titleField(): array
    {
        return [
            'name' => 'title',
            'label' => 'Title',
            'type' => 'text',
            'default_value' => 'The title of the section, use these colors to style the title: <gold>, you can also use <bold>',
        ];
    }
}
