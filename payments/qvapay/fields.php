<?php

return [
    'fields' => [
        'app_id' => [
            'label' => 'lang:ynievesdotnetteam.qvapay::default.qvapay.label_app_id',
            'type' => 'text',
        ],
        'app_secret' => [
            'label' => 'lang:ynievesdotnetteam.qvapay::default.qvapay.label_app_secret',
            'type' => 'text',
        ],
        'app_mode' => [
            'label' => 'lang:ynievesdotnetteam.qvapay::default.qvapay.label_test_mode',
            'type' => 'radiotoggle',
            'default' => 'sandbox',
            'options' => [
                'sandbox' => 'lang:ynievesdotnetteam.qvapay::default.qvapay.text_sandbox',
                'live' => 'lang:ynievesdotnetteam.qvapay::default.qvapay.text_go_live',
            ],
        ],
        'order_status' => [
            'label' => 'lang:igniter.payregister::default.label_order_status',
            'type' => 'select',
            'options' => ['Admin\Models\Statuses_model', 'getDropdownOptionsForOrder'],
            'comment' => 'lang:igniter.payregister::default.help_order_status',
        ],
    ],
    'rules' => [
        ['app_id', 'lang:ynievesdotnetteam.qvapay::default.qvapay.label_app_id', 'string'],
        ['app_secret', 'lang:ynievesdotnetteam.qvapay::default.qvapay.label_app_secret', 'string'],
        ['app_mode', 'lang:ynievesdotnetteam.qvapay::default.qvapay.label_app_mode', 'string'],
        ['order_status', 'lang:ynievesdotnetteam.qvapay::default.label_order_status', 'integer'],
    ],
];
