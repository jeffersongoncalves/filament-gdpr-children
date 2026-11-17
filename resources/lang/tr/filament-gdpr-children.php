<?php

return [
    'assurances' => [
        'label' => 'Yaş doğrulama',
        'plural_label' => 'Yaş doğrulamaları',
    ],

    'guardians' => [
        'label' => 'Veli bağlantısı',
        'plural_label' => 'Veli bağlantıları',
    ],

    'fields' => [
        'subject' => 'Hesap',
        'age' => 'Kontrol anındaki yaş',
        'method' => 'Yöntem',
        'reliable' => 'Güvenilir',
        'not_reliable' => 'Güvenilir değil',
        'provider' => 'Sağlayıcı',
        'assured_at' => 'Doğrulama tarihi',
        'expires_at' => 'Geçerlilik sonu',
        'never' => 'Süresiz',
        'minor' => 'Çocuk',
        'guardian' => 'Ebeveyn sorumluluğu sahibi',
        'relationship' => 'Yakınlık',
        'verified' => 'Veli doğrulandı',
        'status' => 'Durum',
        'verified_at' => 'Doğrulama tarihi',
        'created_at' => 'Oluşturulma',
    ],

    'filters' => [
        'valid' => 'Hâlâ geçerli',
        'below_consent_age' => 'Dijital rıza yaşının altında',
    ],

    'methods' => [
        'self_declaration' => 'Beyan',
        'os_signal' => 'İşletim sistemi sinyali',
        'store_signal' => 'Uygulama mağazası sinyali',
        'document' => 'Belge',
        'facial_estimation' => 'Yüzden yaş tahmini',
        'verifiable_credential' => 'Doğrulanabilir kimlik bilgisi',
        'guardian' => 'Veli tarafından bildirildi',
    ],

    'status' => [
        'pending' => 'Doğrulama bekliyor',
        'active' => 'Etkin',
        'revoked' => 'İptal edildi',
    ],

    'help' => [
        'verified' => 'Yalnızca bu kişinin çocuğun ebeveyn sorumluluğunu taşıdığını makul şekilde doğruladıktan sonra onaylayın (GDPR md. 8(2)). Dijital rıza yaşının altında çocuğun rızası ancak bu kişi verirse veya onaylarsa geçerlidir.',
        'revoke' => 'Başka bir veli doğrulanana kadar çocuğun tek başına verdiği rızalar geçerli olmayacak.',
    ],

    'actions' => [
        'verify' => 'Veliyi doğrula',
        'revoke' => 'Bağlantıyı iptal et',
    ],

    'notifications' => [
        'verified' => 'Veli doğrulandı.',
        'revoked' => 'Bağlantı iptal edildi.',
    ],
];
