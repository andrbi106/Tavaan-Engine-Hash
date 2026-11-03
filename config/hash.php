<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Hash Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور hash — همهٔ کلیدهای مستندشده در `docs/03-engines/hash.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/hash.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('HASH_DEFAULT', 'argon2id'),

    /*| لیست درایورها */
    'drivers' => [
        'argon2id' => [
            // پیکربندی درایور argon2id
            'enabled' => true,
        ],
        'bcrypt' => [
            // پیکربندی درایور bcrypt
            'enabled' => true,
        ],
    ],

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('HASH_PREFIX', 'hash:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('HASH_LOG_CHANNEL', 'hash'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Hash',
        'accessor' => 'hash',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];