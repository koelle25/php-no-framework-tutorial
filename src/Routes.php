<?php
declare(strict_types=1);

namespace NFT;

use NFT\Controllers\Homepage;
use NFT\Controllers\Page;

return [
    [
        'GET',
        '/',
        [Homepage::class, 'show'],
    ],
    [
        'GET',
        '/{slug}',
        [Page::class, 'show'],
    ]
];
