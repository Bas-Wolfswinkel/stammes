<?php

namespace App\Acf;

use OutlawzTeam\Radicle\Support\Acf;

class ThemeSettingsGeneral extends Acf
{
    /**
     * ACF key
     */
    protected $key = 'theme_settings_general';

    /**
     * ACF title
     */
    protected $title = 'Theme Settings';

    /**
     * ACF fields
     */
    public function fields()
    {
        return [
            [
                'name' => 'logo',
                'label' => 'Logo',
                'type' => 'image',
                'instructions' => 'Dit logo zal gebruikt worden op de website',
            ]
        ];
    }

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
                    'value' => 'general-settings',
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
