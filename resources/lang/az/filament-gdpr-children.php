<?php

return [
    'assurances' => [
        'label' => 'Yaş yoxlaması',
        'plural_label' => 'Yaş yoxlamaları',
    ],

    'guardians' => [
        'label' => 'Valideyn bağlantısı',
        'plural_label' => 'Valideyn bağlantıları',
    ],

    'fields' => [
        'subject' => 'Hesab',
        'age' => 'Yoxlama zamanı yaş',
        'method' => 'Üsul',
        'reliable' => 'Etibarlı',
        'not_reliable' => 'Etibarsız',
        'provider' => 'Provayder',
        'assured_at' => 'Yoxlanılıb',
        'expires_at' => 'Etibarlıdır',
        'never' => 'Müddətsiz',
        'minor' => 'Uşaq',
        'guardian' => 'Valideyn məsuliyyəti daşıyan şəxs',
        'relationship' => 'Qohumluq',
        'verified' => 'Valideyn təsdiqlənib',
        'status' => 'Status',
        'verified_at' => 'Təsdiqlənib',
        'created_at' => 'Yaradılıb',
    ],

    'filters' => [
        'valid' => 'Hələ etibarlı',
        'below_consent_age' => 'Rəqəmsal razılıq yaşından aşağı',
    ],

    'methods' => [
        'self_declaration' => 'Özünü bəyan',
        'os_signal' => 'Əməliyyat sistemi siqnalı',
        'store_signal' => 'Tətbiq mağazası siqnalı',
        'document' => 'Sənəd',
        'facial_estimation' => 'Üzlə yaş təxmini',
        'verifiable_credential' => 'Yoxlanıla bilən etimadnamə',
        'guardian' => 'Valideyn tərəfindən bildirilib',
    ],

    'status' => [
        'pending' => 'Təsdiq gözlənilir',
        'active' => 'Aktiv',
        'revoked' => 'Ləğv edilib',
    ],

    'help' => [
        'verified' => 'Yalnız bu şəxsin uşaq üzərində valideyn məsuliyyəti daşıdığını ağlabatan şəkildə yoxladıqdan sonra təsdiqləyin (GDPR maddə 8(2)). Rəqəmsal razılıq yaşından aşağı uşağın razılığı yalnız bu şəxs verdikdə və ya icazə verdikdə etibarlıdır.',
        'revoke' => 'Uşağın tək verdiyi razılıqlar başqa valideyn təsdiqlənənə qədər nəzərə alınmayacaq.',
    ],

    'actions' => [
        'verify' => 'Valideyni təsdiqlə',
        'revoke' => 'Bağlantını ləğv et',
    ],

    'notifications' => [
        'verified' => 'Valideyn təsdiqləndi.',
        'revoked' => 'Bağlantı ləğv edildi.',
    ],
];
