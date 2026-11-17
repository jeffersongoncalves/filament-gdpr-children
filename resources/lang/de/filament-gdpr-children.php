<?php

return [
    'assurances' => [
        'label' => 'Altersprüfung',
        'plural_label' => 'Altersprüfungen',
    ],

    'guardians' => [
        'label' => 'Verknüpfung mit Erziehungsberechtigten',
        'plural_label' => 'Verknüpfungen mit Erziehungsberechtigten',
    ],

    'fields' => [
        'subject' => 'Konto',
        'age' => 'Alter bei der Prüfung',
        'method' => 'Methode',
        'reliable' => 'Zuverlässig',
        'not_reliable' => 'Nicht zuverlässig',
        'provider' => 'Anbieter',
        'assured_at' => 'Geprüft am',
        'expires_at' => 'Gültig bis',
        'never' => 'Kein Ablauf',
        'minor' => 'Kind',
        'guardian' => 'Träger der elterlichen Verantwortung',
        'relationship' => 'Beziehung',
        'verified' => 'Erziehungsberechtigung geprüft',
        'status' => 'Status',
        'verified_at' => 'Geprüft am',
        'created_at' => 'Erstellt am',
    ],

    'filters' => [
        'valid' => 'Noch gültig',
        'below_consent_age' => 'Unter dem digitalen Einwilligungsalter',
    ],

    'methods' => [
        'self_declaration' => 'Selbstauskunft',
        'os_signal' => 'Betriebssystem-Signal',
        'store_signal' => 'App-Store-Signal',
        'document' => 'Ausweisdokument',
        'facial_estimation' => 'Gesichtsbasierte Altersschätzung',
        'verifiable_credential' => 'Überprüfbarer Nachweis',
        'guardian' => 'Von Erziehungsberechtigten angegeben',
    ],

    'status' => [
        'pending' => 'Prüfung ausstehend',
        'active' => 'Aktiv',
        'revoked' => 'Widerrufen',
    ],

    'help' => [
        'verified' => 'Bestätigen Sie erst nach einer angemessenen Prüfung, dass diese Person die elterliche Verantwortung für das Kind trägt (DSGVO Art. 8 Abs. 2). Unter dem digitalen Einwilligungsalter zählt die Einwilligung des Kindes nur, wenn diese Person sie erteilt oder zustimmt.',
        'revoke' => 'Einwilligungen, die das Kind allein erteilt, zählen nicht mehr, bis eine andere erziehungsberechtigte Person geprüft ist.',
    ],

    'actions' => [
        'verify' => 'Erziehungsberechtigung bestätigen',
        'revoke' => 'Verknüpfung widerrufen',
    ],

    'notifications' => [
        'verified' => 'Erziehungsberechtigung bestätigt.',
        'revoked' => 'Verknüpfung widerrufen.',
    ],
];
