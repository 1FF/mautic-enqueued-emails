<?php

return [
    'name' => 'Enqueued Emails Counter',
    'description' => 'See how many emails in queue right now',
    'version' => '1.0',
    'author' => '1FF',
    'routes' => [
        'main' => [
            'emails_enqueued_index' => [
                'path' => 'emails-enqueued/index',
                'controller' => 'EmailsQCounterBundle:EmailsQCounter:index'
            ]
        ]
    ],
    'menu' => [
        'admin' => [
            'priority' => 340,
            'items'    => [
                'Enqueued Emails' => [
                    'id' => 'mautic_enqueued_emails_left_menu',
                    'iconClass' => 'fa-envelope',
                    'route' => 'emails_enqueued_index',
                ]
            ]
        ]
    ],
    'services' => [
        'controllers' => [
            'tmp.controller' => [
                'class' => \MauticPlugin\EmailsQCounterBundle\Controller\EmailsQCounterController::class,
                'arguments' => [
                    'mautic.emails.queue.counter.service',
                ]
            ]
        ],
        'other' => [
            'mautic.emails.queue.counter.service' => [
                'class' => \MauticPlugin\EmailsQCounterBundle\Service\EmailsQueueCounterService::class,
                'arguments' => [
                    '%mautic.mailer_spool_path%',
                    '%mautic.emails_queued_file_ext%',
                ]
            ]
        ],
    ],
    'parameters' => [
        'emails_queued_file_ext' => ['message'],
    ]
];
