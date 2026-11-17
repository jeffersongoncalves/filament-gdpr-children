<?php

return [
    'assurances' => [
        'label' => 'احراز سن',
        'plural_label' => 'احرازهای سن',
    ],

    'guardians' => [
        'label' => 'پیوند با ولی',
        'plural_label' => 'پیوندهای ولی',
    ],

    'fields' => [
        'subject' => 'حساب',
        'age' => 'سن هنگام بررسی',
        'method' => 'روش',
        'reliable' => 'قابل اعتماد',
        'not_reliable' => 'غیرقابل اعتماد',
        'provider' => 'ارائه‌دهنده',
        'assured_at' => 'تاریخ احراز',
        'expires_at' => 'معتبر تا',
        'never' => 'بدون انقضا',
        'minor' => 'کودک',
        'guardian' => 'دارنده مسئولیت والدین',
        'relationship' => 'نسبت',
        'verified' => 'ولی تأیید شد',
        'status' => 'وضعیت',
        'verified_at' => 'تاریخ تأیید',
        'created_at' => 'تاریخ ایجاد',
    ],

    'filters' => [
        'valid' => 'هنوز معتبر',
        'below_consent_age' => 'زیر سن رضایت دیجیتال',
    ],

    'methods' => [
        'self_declaration' => 'خوداظهاری',
        'os_signal' => 'سیگنال سیستم‌عامل',
        'store_signal' => 'سیگنال فروشگاه برنامه',
        'document' => 'مدرک',
        'facial_estimation' => 'تخمین سن با چهره',
        'verifiable_credential' => 'اعتبارنامه قابل‌تأیید',
        'guardian' => 'اعلام‌شده توسط ولی',
    ],

    'status' => [
        'pending' => 'در انتظار تأیید',
        'active' => 'فعال',
        'revoked' => 'لغوشده',
    ],

    'help' => [
        'verified' => 'فقط پس از بررسی معقول اینکه این شخص مسئولیت والدین کودک را دارد تأیید کنید (GDPR ماده 8(2)). زیر سن رضایت دیجیتال، رضایت کودک فقط زمانی معتبر است که این شخص آن را بدهد یا تأیید کند.',
        'revoke' => 'رضایت‌هایی که کودک به‌تنهایی می‌دهد تا تأیید ولی دیگر معتبر نخواهد بود.',
    ],

    'actions' => [
        'verify' => 'تأیید ولی',
        'revoke' => 'لغو پیوند',
    ],

    'notifications' => [
        'verified' => 'ولی تأیید شد.',
        'revoked' => 'پیوند لغو شد.',
    ],
];
