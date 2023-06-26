<?php

use App\Media\Conversions\StorefrontConversions;
use Lunar\Base\StandardMediaConversions;

return [
    'conversions' => [
        StandardMediaConversions::class,
        StorefrontConversions::class,
    ],
    'fallback'    => [
        'url'  => env('FALLBACK_IMAGE_URL', asset('images/placeholder.jpg')),
        'path' => env('FALLBACK_IMAGE_PATH', null),
    ],
];
