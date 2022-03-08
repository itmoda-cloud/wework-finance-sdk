<?php

declare(strict_types=1);
/**
 * This file is part of ITModa.
 * @link     https://itmodar.com
 * @document https://doc.itmodar.com
 * @contact  group@itmodar.com
 * @license  https://git.itmodar.com/itmoda-cloud/itmoda/blob/master/LICENSE
 */
return [
    'default'   => 'php-ext',
    'providers' => [
        'php-ext' => [
            'driver' => \ITModa\WeWorkFinanceSDK\Provider\PHPExtProvider::class,
        ],
        'php-ffi' => [
            'driver' => \ITModa\WeWorkFinanceSDK\Provider\FFIProvider::class,
        ],
    ],
];
