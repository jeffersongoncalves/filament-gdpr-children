<?php

return [
    'assurances' => [
        'label' => 'Leeftijdscontrole',
        'plural_label' => 'Leeftijdscontroles',
    ],

    'guardians' => [
        'label' => 'Koppeling met voogd',
        'plural_label' => 'Koppelingen met voogden',
    ],

    'fields' => [
        'subject' => 'Account',
        'age' => 'Leeftijd bij de controle',
        'method' => 'Methode',
        'reliable' => 'Betrouwbaar',
        'not_reliable' => 'Niet betrouwbaar',
        'provider' => 'Aanbieder',
        'assured_at' => 'Gecontroleerd op',
        'expires_at' => 'Geldig tot',
        'never' => 'Verloopt niet',
        'minor' => 'Kind',
        'guardian' => 'Houder van de ouderlijke verantwoordelijkheid',
        'relationship' => 'Relatie',
        'verified' => 'Voogd geverifieerd',
        'status' => 'Status',
        'verified_at' => 'Geverifieerd op',
        'created_at' => 'Aangemaakt op',
    ],

    'filters' => [
        'valid' => 'Nog geldig',
        'below_consent_age' => 'Onder de digitale toestemmingsleeftijd',
    ],

    'methods' => [
        'self_declaration' => 'Zelfverklaring',
        'os_signal' => 'Signaal van het besturingssysteem',
        'store_signal' => 'Signaal van de app store',
        'document' => 'Identiteitsdocument',
        'facial_estimation' => 'Leeftijdsschatting via gezicht',
        'verifiable_credential' => 'Verifieerbaar bewijs',
        'guardian' => 'Opgegeven door de voogd',
    ],

    'status' => [
        'pending' => 'Verificatie in afwachting',
        'active' => 'Actief',
        'revoked' => 'Ingetrokken',
    ],

    'help' => [
        'verified' => 'Bevestig pas na een redelijke controle dat deze persoon de ouderlijke verantwoordelijkheid voor het kind draagt (AVG art. 8(2)). Onder de digitale toestemmingsleeftijd telt de toestemming van het kind alleen als deze persoon die geeft of goedkeurt.',
        'revoke' => 'Toestemmingen die het kind alleen geeft tellen niet meer tot een andere voogd is geverifieerd.',
    ],

    'actions' => [
        'verify' => 'Voogd verifiëren',
        'revoke' => 'Koppeling intrekken',
    ],

    'notifications' => [
        'verified' => 'Voogd geverifieerd.',
        'revoked' => 'Koppeling ingetrokken.',
    ],
];
