<?php

return [
    'assurances' => [
        'label' => 'Weryfikacja wieku',
        'plural_label' => 'Weryfikacje wieku',
    ],

    'guardians' => [
        'label' => 'Powiązanie z opiekunem',
        'plural_label' => 'Powiązania z opiekunami',
    ],

    'fields' => [
        'subject' => 'Konto',
        'age' => 'Wiek w chwili weryfikacji',
        'method' => 'Metoda',
        'reliable' => 'Wiarygodna',
        'not_reliable' => 'Niewiarygodna',
        'provider' => 'Dostawca',
        'assured_at' => 'Zweryfikowano',
        'expires_at' => 'Ważna do',
        'never' => 'Bez wygaśnięcia',
        'minor' => 'Dziecko',
        'guardian' => 'Osoba sprawująca władzę rodzicielską',
        'relationship' => 'Pokrewieństwo',
        'verified' => 'Opiekun zweryfikowany',
        'status' => 'Status',
        'verified_at' => 'Zweryfikowano',
        'created_at' => 'Utworzono',
    ],

    'filters' => [
        'valid' => 'Nadal ważne',
        'below_consent_age' => 'Poniżej wieku cyfrowej zgody',
    ],

    'methods' => [
        'self_declaration' => 'Oświadczenie własne',
        'os_signal' => 'Sygnał systemu operacyjnego',
        'store_signal' => 'Sygnał sklepu z aplikacjami',
        'document' => 'Dokument',
        'facial_estimation' => 'Szacowanie wieku na podstawie twarzy',
        'verifiable_credential' => 'Weryfikowalne poświadczenie',
        'guardian' => 'Podany przez opiekuna',
    ],

    'status' => [
        'pending' => 'Oczekuje na weryfikację',
        'active' => 'Aktywne',
        'revoked' => 'Odwołane',
    ],

    'help' => [
        'verified' => 'Potwierdź dopiero po rozsądnej weryfikacji, że ta osoba sprawuje władzę rodzicielską nad dzieckiem (RODO art. 8 ust. 2). Poniżej wieku cyfrowej zgody zgoda dziecka liczy się tylko, gdy ta osoba jej udzieli lub ją zatwierdzi.',
        'revoke' => 'Zgody udzielone przez dziecko samodzielnie nie będą się liczyć do czasu weryfikacji innego opiekuna.',
    ],

    'actions' => [
        'verify' => 'Zweryfikuj opiekuna',
        'revoke' => 'Odwołaj powiązanie',
    ],

    'notifications' => [
        'verified' => 'Opiekun zweryfikowany.',
        'revoked' => 'Powiązanie odwołane.',
    ],
];
