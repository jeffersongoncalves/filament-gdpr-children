<?php

return [
    'assurances' => [
        'label' => 'Aferição de idade',
        'plural_label' => 'Aferições de idade',
    ],

    'guardians' => [
        'label' => 'Vínculo com responsável',
        'plural_label' => 'Vínculos com responsáveis',
    ],

    'fields' => [
        'subject' => 'Conta',
        'age' => 'Idade na aferição',
        'method' => 'Método',
        'reliable' => 'Confiável',
        'not_reliable' => 'Não confiável',
        'provider' => 'Fornecedor',
        'assured_at' => 'Aferida em',
        'expires_at' => 'Válida até',
        'never' => 'Sem validade',
        'minor' => 'Criança',
        'guardian' => 'Titular das responsabilidades parentais',
        'relationship' => 'Parentesco',
        'verified' => 'Responsável verificado',
        'status' => 'Situação',
        'verified_at' => 'Verificado em',
        'created_at' => 'Criado em',
    ],

    'filters' => [
        'valid' => 'Ainda válidas',
        'below_consent_age' => 'Abaixo da idade de consentimento digital',
    ],

    'methods' => [
        'self_declaration' => 'Autodeclaração',
        'os_signal' => 'Sinal do sistema operacional',
        'store_signal' => 'Sinal da loja de aplicativos',
        'document' => 'Documento',
        'facial_estimation' => 'Estimativa facial de idade',
        'verifiable_credential' => 'Credencial verificável',
        'guardian' => 'Informada pelo responsável',
    ],

    'status' => [
        'pending' => 'Verificação pendente',
        'active' => 'Ativo',
        'revoked' => 'Revogado',
    ],

    'help' => [
        'verified' => 'Só confirme após uma verificação razoável de que esta pessoa detém as responsabilidades parentais da criança (RGPD art. 8(2)). Abaixo da idade de consentimento digital, o consentimento da criança só vale quando esta pessoa o dá ou autoriza.',
        'revoke' => 'Os consentimentos que a criança der sozinha deixarão de valer até que outro responsável seja verificado.',
    ],

    'actions' => [
        'verify' => 'Verificar responsável',
        'revoke' => 'Revogar vínculo',
    ],

    'notifications' => [
        'verified' => 'Responsável verificado.',
        'revoked' => 'Vínculo revogado.',
    ],
];
