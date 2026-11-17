<?php

return [
    'assurances' => [
        'label' => 'Verificación de edad',
        'plural_label' => 'Verificaciones de edad',
    ],

    'guardians' => [
        'label' => 'Vínculo con tutor',
        'plural_label' => 'Vínculos con tutores',
    ],

    'fields' => [
        'subject' => 'Cuenta',
        'age' => 'Edad en la verificación',
        'method' => 'Método',
        'reliable' => 'Fiable',
        'not_reliable' => 'No fiable',
        'provider' => 'Proveedor',
        'assured_at' => 'Verificada el',
        'expires_at' => 'Válida hasta',
        'never' => 'Sin vencimiento',
        'minor' => 'Menor',
        'guardian' => 'Titular de la patria potestad',
        'relationship' => 'Parentesco',
        'verified' => 'Tutor verificado',
        'status' => 'Estado',
        'verified_at' => 'Verificado el',
        'created_at' => 'Creado el',
    ],

    'filters' => [
        'valid' => 'Aún válidas',
        'below_consent_age' => 'Por debajo de la edad de consentimiento digital',
    ],

    'methods' => [
        'self_declaration' => 'Autodeclaración',
        'os_signal' => 'Señal del sistema operativo',
        'store_signal' => 'Señal de la tienda de aplicaciones',
        'document' => 'Documento',
        'facial_estimation' => 'Estimación facial de edad',
        'verifiable_credential' => 'Credencial verificable',
        'guardian' => 'Indicada por el tutor',
    ],

    'status' => [
        'pending' => 'Verificación pendiente',
        'active' => 'Activo',
        'revoked' => 'Revocado',
    ],

    'help' => [
        'verified' => 'Confirme solo tras comprobar razonablemente que esta persona ostenta la patria potestad del menor (RGPD art. 8(2)). Por debajo de la edad de consentimiento digital, el consentimiento del menor solo vale si esta persona lo da o lo autoriza.',
        'revoke' => 'Los consentimientos que el menor dé solo dejarán de contar hasta que se verifique otro tutor.',
    ],

    'actions' => [
        'verify' => 'Verificar tutor',
        'revoke' => 'Revocar vínculo',
    ],

    'notifications' => [
        'verified' => 'Tutor verificado.',
        'revoked' => 'Vínculo revocado.',
    ],
];
