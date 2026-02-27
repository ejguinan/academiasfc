<?php

return [
    'app_name' => 'Academia SFC',
    'url' => 'https://academiasfc.com',
    'environment' => 'production',
    'debug' => false,
    'timezone' => 'UTC',
    'locale' => 'en',
    'white_label' => [
        'enabled' => true,
        'branding' => 'SFC',
    ],
    'features' => [
        'subscriptions' => true,
        'payments' => true,
        'sms_notifications' => true,
        'file_uploads' => true,
        'reporting' => true,
    ],
];