<?php

namespace App\Media\Conversions;

use Spatie\Image\Manipulations;

class StorefrontConversions
{
    public function apply($model)
    {
        $conversions = [
            'product-thumbnail'  => [
                'width'  => 260,
                'height' => 260,
            ],
            'product-detail'     => [
                'width'  => 585,
                'height' => 585,
            ],
            'carousel-thumbnail' => [
                'width'  => 90,
                'height' => 120,
            ],
        ];

        foreach ($conversions as $key => $conversion) {
            $model->addMediaConversion($key)
                  ->fit(
                      Manipulations::FIT_FILL,
                      $conversion['width'],
                      $conversion['height']
                  )->keepOriginalImageFormat();
        }
    }
}
