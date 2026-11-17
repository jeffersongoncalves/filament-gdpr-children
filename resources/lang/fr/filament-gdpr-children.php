<?php

return [
    'assurances' => [
        'label' => 'Vérification d\'âge',
        'plural_label' => 'Vérifications d\'âge',
    ],

    'guardians' => [
        'label' => 'Lien avec un responsable légal',
        'plural_label' => 'Liens avec des responsables légaux',
    ],

    'fields' => [
        'subject' => 'Compte',
        'age' => 'Âge lors de la vérification',
        'method' => 'Méthode',
        'reliable' => 'Fiable',
        'not_reliable' => 'Non fiable',
        'provider' => 'Fournisseur',
        'assured_at' => 'Vérifiée le',
        'expires_at' => 'Valide jusqu\'au',
        'never' => 'Sans expiration',
        'minor' => 'Enfant',
        'guardian' => 'Titulaire de la responsabilité parentale',
        'relationship' => 'Lien de parenté',
        'verified' => 'Responsable vérifié',
        'status' => 'Statut',
        'verified_at' => 'Vérifié le',
        'created_at' => 'Créé le',
    ],

    'filters' => [
        'valid' => 'Encore valides',
        'below_consent_age' => 'En dessous de l\'âge du consentement numérique',
    ],

    'methods' => [
        'self_declaration' => 'Autodéclaration',
        'os_signal' => 'Signal du système d\'exploitation',
        'store_signal' => 'Signal de la boutique d\'applications',
        'document' => 'Pièce d\'identité',
        'facial_estimation' => 'Estimation faciale de l\'âge',
        'verifiable_credential' => 'Attestation vérifiable',
        'guardian' => 'Déclarée par le responsable',
    ],

    'status' => [
        'pending' => 'Vérification en attente',
        'active' => 'Actif',
        'revoked' => 'Révoqué',
    ],

    'help' => [
        'verified' => 'Ne confirmez qu\'après avoir raisonnablement vérifié que cette personne est titulaire de la responsabilité parentale (RGPD art. 8(2)). En dessous de l\'âge du consentement numérique, le consentement de l\'enfant ne compte que s\'il est donné ou autorisé par cette personne.',
        'revoke' => 'Les consentements donnés par l\'enfant seul ne compteront plus tant qu\'un autre responsable n\'est pas vérifié.',
    ],

    'actions' => [
        'verify' => 'Vérifier le responsable',
        'revoke' => 'Révoquer le lien',
    ],

    'notifications' => [
        'verified' => 'Responsable vérifié.',
        'revoked' => 'Lien révoqué.',
    ],
];
