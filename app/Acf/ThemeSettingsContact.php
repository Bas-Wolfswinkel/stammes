<?php

namespace App\Acf;

use OutlawzTeam\Radicle\Support\Acf;

class ThemeSettingsContact extends Acf
{
    /**
     * ACF key
     */
    protected $key = 'theme_settings_contact';

    /**
     * ACF title
     */
    protected $title = 'Contact info';

    /**
     * ACF fields
     */
    public function fields()
    {
        return [
            [
                'type' => 'text',
                'name' => 'address',
                'label' => 'Adres',
            ],
            [
                'type' => 'text',
                'name' => 'postal_city',
                'label' => 'Postcode en plaats',
            ],
            [
                'type' => 'text',
                'name' => 'email',
                'label' => 'Email',
            ],
            [
                'type' => 'link',
                'name' => 'phone',
                'label' => 'Telefoon',
            ],
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
                    'value' => 'contact-settings',
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
