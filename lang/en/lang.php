<?php

return [
    'plugin' => [
        'name' => 'Countdown',
        'description' => 'A simple yet robust countdown for anything you can think of!',
    ],
    'components' => [
        'countdown' => [
            'name' => 'Countdown Component',
            'description' => 'Displays a countdown to a given date.',
            'properties' => [
                'date' => [
                    'title' => 'Date',
                    'description' => 'The date the countdown uses.',
                    'validationMessage' => 'Invalid datetime format. Format should be YYYY/MM/DD HH:MM:SS'
                ]
            ]
        ]
    ]
];
