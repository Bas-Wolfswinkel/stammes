<?php

namespace App\Acf;

use OutlawzTeam\Radicle\Support\Acf;

class ServiceFields extends Acf
{
    /**
     * ACF key
     */
    protected $key = 'service_fields';

    /**
     * ACF title
     */
    protected $title = 'Service';

    /**
     * ACF fields
     */
    public function fields()
    {
        return [
            [
                'type' => 'color_picker',
                'name' => 'color',
                'label' => 'Kleur',
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
                    'value' => 'service',
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
