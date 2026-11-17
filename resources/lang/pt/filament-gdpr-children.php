<?php

return [
    'assurances' => [
        'label' => 'Verificação de idade',
        'plural_label' => 'Verificações de idade',
    ],

    'guardians' => [
        'label' => 'Ligação a responsável',
        'plural_label' => 'Ligações a responsáveis',
    ],

    'fields' => [
        'subject' => 'Conta',
        'age' => 'Idade na verificação',
        'method' => 'Método',
        'reliable' => 'Fiável',
        'not_reliable' => 'Não fiável',
        'provider' => 'Fornecedor',
        'assured_at' => 'Verificada em',
        'expires_at' => 'Válida até',
        'never' => 'Sem validade',
        'minor' => 'Criança',
        'guardian' => 'Titular das responsabilidades parentais',
        'relationship' => 'Parentesco',
        'verified' => 'Responsável verificado',
        'status' => 'Estado',
        'verified_at' => 'Verificado em',
        'created_at' => 'Criado em',
    ],

    'filters' => [
        'valid' => 'Ainda válidas',
        'below_consent_age' => 'Abaixo da idade de consentimento digital',
    ],

    'methods' => [
        'self_declaration' => 'Autodeclaração',
        'os_signal' => 'Sinal do sistema operativo',
        'store_signal' => 'Sinal da loja de aplicações',
        'document' => 'Documento',
        'facial_estimation' => 'Estimativa facial da idade',
        'verifiable_credential' => 'Credencial verificável',
        'guardian' => 'Indicada pelo responsável',
    ],

    'status' => [
        'pending' => 'Verificação pendente',
        'active' => 'Ativo',
        'revoked' => 'Revogado',
    ],

    'help' => [
        'verified' => 'Confirme apenas após uma verificação razoável de que esta pessoa detém as responsabilidades parentais da criança (RGPD art. 8.º, n.º 2). Abaixo da idade de consentimento digital, o consentimento da criança só conta quando esta pessoa o dá ou autoriza.',
        'revoke' => 'Os consentimentos que a criança der sozinha deixarão de contar até ser verificado outro responsável.',
    ],

    'actions' => [
        'verify' => 'Verificar responsável',
        'revoke' => 'Revogar ligação',
    ],

    'notifications' => [
        'verified' => 'Responsável verificado.',
        'revoked' => 'Ligação revogada.',
    ],
];
