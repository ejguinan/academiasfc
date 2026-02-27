<?php

return [
    'url' => 'https://api.enlineard.com/v1/send',
    'token' => 'your_token_here',
    'instance_id' => 'your_instance_id_here',
    'timeouts' => [
        'connect' => 30,
        'response' => 10,
    ],
    'templates' => [
        'game_convocation' => [
            'subject' => 'Game Convocation',
            'body' => 'Dear player, you are invited to participate in the upcoming game.'],
        'training_alert' => [
            'subject' => 'Training Alert',
            'body' => 'Reminder: Training session starts at {{time}}.'],
        'invoice' => [
            'subject' => 'Invoice Generated',
            'body' => 'Your invoice for this month is ready.'],
        'payment_receipt' => [
            'subject' => 'Payment Receipt',
            'body' => 'Thank you for your payment. Here is your receipt.'],
        'general_announcement' => [
            'subject' => 'Announcement',
            'body' => 'Important announcement: {{message}}'],
    ],
];
