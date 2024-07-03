<?php

namespace App\Acf;

use OutlawzTeam\Radicle\Support\Acf;

class ThemeSettingsFooter extends Acf
{
    /**
     * ACF key
     */
    protected $key = 'theme_settings_footer';

    /**
     * ACF title
     */
    protected $title = 'Footer';

    /**
     * ACF Location
     */
    public function location(): array
    {
        return [
            [
                [
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'footer-settings',
                ],
            ],
        ];
    }

    public function fields(): array
    {
        return [
            [
                'type' => 'repeater',
                'name' => 'services',
                'label' => 'Diensten links',
                'layout' => 'block',
                'button_label' => 'Dienst toevoegen',
                'sub_fields' => [
                    [
                        'type' => 'link',
                        'name' => 'link',
                        'label' => 'Link',
                    ],
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
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'seamless',
            'instruction_placement' => 'label',
        ];
    }
}
