<?php
declare(strict_types=1);

namespace NFT;

use NFT\Controllers\Homepage;

return [
    [
        'GET',
        '/',
        [Homepage::class, 'show'],
    ],
    [
        'GET',
        '/hello-world',
        function () {
          echo 'Hello World';
        },
    ],
    [
        'GET',
        '/another-route',
        function () {
          echo 'This works too';
        },
    ],
];
