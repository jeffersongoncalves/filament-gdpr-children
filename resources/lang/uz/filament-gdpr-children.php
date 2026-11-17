<?php

return [
    'assurances' => [
        'label' => 'Yosh tekshiruvi',
        'plural_label' => 'Yosh tekshiruvlari',
    ],

    'guardians' => [
        'label' => 'Vasiy bilan bog\'lanish',
        'plural_label' => 'Vasiylar bilan bog\'lanishlar',
    ],

    'fields' => [
        'subject' => 'Hisob',
        'age' => 'Tekshiruv paytidagi yosh',
        'method' => 'Usul',
        'reliable' => 'Ishonchli',
        'not_reliable' => 'Ishonchsiz',
        'provider' => 'Provayder',
        'assured_at' => 'Tekshirilgan sana',
        'expires_at' => 'Amal qiladi',
        'never' => 'Muddatsiz',
        'minor' => 'Bola',
        'guardian' => 'Ota-ona mas\'uliyatini zimmasiga olgan shaxs',
        'relationship' => 'Qarindoshlik',
        'verified' => 'Vasiy tasdiqlangan',
        'status' => 'Holat',
        'verified_at' => 'Tasdiqlangan sana',
        'created_at' => 'Yaratilgan',
    ],

    'filters' => [
        'valid' => 'Hali amal qiladi',
        'below_consent_age' => 'Raqamli rozilik yoshidan kichik',
    ],

    'methods' => [
        'self_declaration' => 'O\'zini bayon qilish',
        'os_signal' => 'Operatsion tizim signali',
        'store_signal' => 'Ilovalar do\'koni signali',
        'document' => 'Hujjat',
        'facial_estimation' => 'Yuz orqali yoshni baholash',
        'verifiable_credential' => 'Tekshiriladigan guvohnoma',
        'guardian' => 'Vasiy ko\'rsatgan',
    ],

    'status' => [
        'pending' => 'Tasdiq kutilmoqda',
        'active' => 'Faol',
        'revoked' => 'Bekor qilingan',
    ],

    'help' => [
        'verified' => 'Faqat bu shaxs bolaga nisbatan ota-ona mas\'uliyatini zimmasiga olganini oqilona tekshirgandan so\'ng tasdiqlang (GDPR 8(2)-modda). Raqamli rozilik yoshidan kichik bolaning roziligi faqat shu shaxs bergan yoki ruxsat bergan taqdirda hisobga olinadi.',
        'revoke' => 'Boshqa vasiy tasdiqlanmaguncha bolaning o\'zi bergan roziliklari hisobga olinmaydi.',
    ],

    'actions' => [
        'verify' => 'Vasiyni tasdiqlash',
        'revoke' => 'Bog\'lanishni bekor qilish',
    ],

    'notifications' => [
        'verified' => 'Vasiy tasdiqlandi.',
        'revoked' => 'Bog\'lanish bekor qilindi.',
    ],
];
