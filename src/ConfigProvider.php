<?php

declare(strict_types=1);
/**
 * This file is part of ITModa.
 * @link     https://itmodar.com
 * @document https://doc.itmodar.com
 * @contact  group@itmodar.com
 * @license  https://git.itmodar.com/itmoda-cloud/itmoda/blob/master/LICENSE
 */
namespace ITModa\WeWorkFinanceSDK;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'dependencies' => [
            ],
            'commands' => [
            ],
            'publish' => [
                [
                    'id'          => 'wx_finance_sdk',
                    'description' => '企业微信会话内容存档',
                    'source'      => __DIR__ . '/../publish/wx_finance_sdk.php',
                    'destination' => BASE_PATH . '/config/autoload/wx_finance_sdk.php',
                ],
            ],
        ];
    }
}
