<?php

return [
    'assurances' => [
        'label' => 'Verifica dell\'età',
        'plural_label' => 'Verifiche dell\'età',
    ],

    'guardians' => [
        'label' => 'Collegamento con il tutore',
        'plural_label' => 'Collegamenti con i tutori',
    ],

    'fields' => [
        'subject' => 'Account',
        'age' => 'Età al controllo',
        'method' => 'Metodo',
        'reliable' => 'Affidabile',
        'not_reliable' => 'Non affidabile',
        'provider' => 'Fornitore',
        'assured_at' => 'Verificata il',
        'expires_at' => 'Valida fino al',
        'never' => 'Nessuna scadenza',
        'minor' => 'Minore',
        'guardian' => 'Titolare della responsabilità genitoriale',
        'relationship' => 'Parentela',
        'verified' => 'Tutore verificato',
        'status' => 'Stato',
        'verified_at' => 'Verificato il',
        'created_at' => 'Creato il',
    ],

    'filters' => [
        'valid' => 'Ancora valide',
        'below_consent_age' => 'Sotto l\'età del consenso digitale',
    ],

    'methods' => [
        'self_declaration' => 'Autodichiarazione',
        'os_signal' => 'Segnale del sistema operativo',
        'store_signal' => 'Segnale dello store di app',
        'document' => 'Documento',
        'facial_estimation' => 'Stima facciale dell\'età',
        'verifiable_credential' => 'Credenziale verificabile',
        'guardian' => 'Indicata dal tutore',
    ],

    'status' => [
        'pending' => 'Verifica in attesa',
        'active' => 'Attivo',
        'revoked' => 'Revocato',
    ],

    'help' => [
        'verified' => 'Conferma solo dopo aver verificato ragionevolmente che questa persona è titolare della responsabilità genitoriale (GDPR art. 8(2)). Sotto l\'età del consenso digitale, il consenso del minore vale solo se dato o autorizzato da questa persona.',
        'revoke' => 'I consensi dati dal minore da solo non conteranno più finché non verrà verificato un altro tutore.',
    ],

    'actions' => [
        'verify' => 'Verifica tutore',
        'revoke' => 'Revoca collegamento',
    ],

    'notifications' => [
        'verified' => 'Tutore verificato.',
        'revoked' => 'Collegamento revocato.',
    ],
];
