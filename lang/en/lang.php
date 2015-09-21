<?php

return [
    'plugin' => [
        'name' => 'Countdown',
        'description' => 'A simple yet robust countdown for anything you can think of!',
    ],
    'permissions' => [
        'access_countdown' => 'Manage the countdown plugin'
    ],
    'settings' => [
        'date' => 'Date',
        'comment' => 'Comment',
        'label' => 'Countdown',
        'description' => 'Manage the countdown plugin',
        'category' => 'Countdown'
    ],
    'component' => [
        'name' => 'Countdown Component',
        'description' => 'Displays a countdown to a given date.'
    ]
];
