<?php

use App\Media\Conversions\StorefrontConversions;

return [
    'conversions' => [
        StorefrontConversions::class,
    ],
    'fallback'    => [
        'url'  => env('FALLBACK_IMAGE_URL', null),
        'path' => env('FALLBACK_IMAGE_PATH', null),
    ],
];
