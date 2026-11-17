<?php

return [
    'assurances' => [
        'label' => '年齢確認',
        'plural_label' => '年齢確認',
    ],

    'guardians' => [
        'label' => '保護者リンク',
        'plural_label' => '保護者リンク',
    ],

    'fields' => [
        'subject' => 'アカウント',
        'age' => '確認時の年齢',
        'method' => '方法',
        'reliable' => '信頼できる',
        'not_reliable' => '信頼できない',
        'provider' => 'プロバイダー',
        'assured_at' => '確認日時',
        'expires_at' => '有効期限',
        'never' => '期限なし',
        'minor' => '子ども',
        'guardian' => '親権者',
        'relationship' => '続柄',
        'verified' => '保護者確認済み',
        'status' => 'ステータス',
        'verified_at' => '確認日時',
        'created_at' => '作成日時',
    ],

    'filters' => [
        'valid' => '有効なもののみ',
        'below_consent_age' => 'デジタル同意年齢未満',
    ],

    'methods' => [
        'self_declaration' => '自己申告',
        'os_signal' => 'OSのシグナル',
        'store_signal' => 'アプリストアのシグナル',
        'document' => '本人確認書類',
        'facial_estimation' => '顔による年齢推定',
        'verifiable_credential' => '検証可能な資格情報',
        'guardian' => '保護者による申告',
    ],

    'status' => [
        'pending' => '確認待ち',
        'active' => '有効',
        'revoked' => '取消済み',
    ],

    'help' => [
        'verified' => 'この人物が子どもの親権者であることを合理的に確認した後にのみ承認してください（GDPR第8条第2項）。デジタル同意年齢未満では、この人物が同意または承認した場合にのみ子どもの同意が有効です。',
        'revoke' => '別の保護者が確認されるまで、子どもが単独で行った同意は無効になります。',
    ],

    'actions' => [
        'verify' => '保護者を確認',
        'revoke' => 'リンクを取り消す',
    ],

    'notifications' => [
        'verified' => '保護者を確認しました。',
        'revoked' => 'リンクを取り消しました。',
    ],
];
