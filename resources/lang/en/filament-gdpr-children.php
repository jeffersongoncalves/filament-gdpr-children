<?php

return [
    'assurances' => [
        'label' => 'Age check',
        'plural_label' => 'Age checks',
    ],
    'guardians' => [
        'label' => 'Guardian link',
        'plural_label' => 'Guardian links',
    ],
    'fields' => [
        'subject' => 'Account',
        'age' => 'Age at the check',
        'method' => 'Method',
        'reliable' => 'Reliable',
        'not_reliable' => 'Not reliable',
        'provider' => 'Provider',
        'assured_at' => 'Checked at',
        'expires_at' => 'Valid until',
        'never' => 'No expiry',
        'minor' => 'Child',
        'guardian' => 'Holder of parental responsibility',
        'relationship' => 'Relationship',
        'verified' => 'Guardian verified',
        'status' => 'Status',
        'verified_at' => 'Verified at',
        'created_at' => 'Created at',
    ],
    'filters' => [
        'valid' => 'Still valid',
        'below_consent_age' => 'Below the age of digital consent',
    ],
    'methods' => [
        'self_declaration' => 'Self-declaration',
        'os_signal' => 'Operating system signal',
        'store_signal' => 'App store signal',
        'document' => 'Document',
        'facial_estimation' => 'Facial age estimation',
        'verifiable_credential' => 'Verifiable credential',
        'guardian' => 'Stated by the guardian',
    ],
    'status' => [
        'pending' => 'Pending verification',
        'active' => 'Active',
        'revoked' => 'Revoked',
    ],
    'help' => [
        'verified' => 'Only confirm after a reasonable check that this person holds parental responsibility for the child (GDPR Art. 8(2)). Below the age of digital consent, the child\'s consent only counts when this person gives or authorises it.',
        'revoke' => 'Consents the child gives alone will no longer count until another guardian is verified.',
    ],
    'actions' => [
        'verify' => 'Verify guardian',
        'revoke' => 'Revoke link',
    ],
    'notifications' => [
        'verified' => 'Guardian verified.',
        'revoked' => 'Link revoked.',
    ],
];
