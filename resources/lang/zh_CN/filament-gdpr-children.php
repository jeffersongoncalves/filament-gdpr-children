<?php

return [
    'assurances' => [
        'label' => '年龄核验',
        'plural_label' => '年龄核验',
    ],

    'guardians' => [
        'label' => '监护人关联',
        'plural_label' => '监护人关联',
    ],

    'fields' => [
        'subject' => '账户',
        'age' => '检查时的年龄',
        'method' => '方式',
        'reliable' => '可靠',
        'not_reliable' => '不可靠',
        'provider' => '提供方',
        'assured_at' => '核验时间',
        'expires_at' => '有效期至',
        'never' => '长期有效',
        'minor' => '儿童',
        'guardian' => '父母责任承担者',
        'relationship' => '关系',
        'verified' => '监护人已核实',
        'status' => '状态',
        'verified_at' => '核实时间',
        'created_at' => '创建时间',
    ],

    'filters' => [
        'valid' => '仍有效',
        'below_consent_age' => '低于数字同意年龄',
    ],

    'methods' => [
        'self_declaration' => '自我声明',
        'os_signal' => '操作系统信号',
        'store_signal' => '应用商店信号',
        'document' => '证件',
        'facial_estimation' => '人脸年龄估计',
        'verifiable_credential' => '可验证凭证',
        'guardian' => '由监护人提供',
    ],

    'status' => [
        'pending' => '待核实',
        'active' => '有效',
        'revoked' => '已撤销',
    ],

    'help' => [
        'verified' => '仅在合理核实此人对该儿童承担父母责任后再确认（GDPR第8(2)条）。低于数字同意年龄时，儿童的同意仅在此人给予或授权时有效。',
        'revoke' => '在另一位监护人通过核实之前，儿童单独给予的同意将不再有效。',
    ],

    'actions' => [
        'verify' => '核实监护人',
        'revoke' => '撤销关联',
    ],

    'notifications' => [
        'verified' => '监护人已核实。',
        'revoked' => '关联已撤销。',
    ],
];
