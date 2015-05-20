<?php

return [
    'copyrightString' => '2015 &copy; product-catalog.ru',
    // used in first migration to create default users
    'defaultUsers' => [
        [
            'username' => 'admin',
            'password' => 'admin',
            'email' => 'admin@admin.ru',
            'role' => 'admin'
        ],
        [
            'username' => 'content',
            'password' => 'content',
            'email' => 'content@content.ru',
            'role' => 'content'
        ],
        [
            'username' => 'seo',
            'password' => 'seo',
            'email' => 'seo@seo.ru',
            'role' => 'seo'
        ],
        [
            'username' => 'user',
            'password' => 'user',
            'email' => 'user@user.ru',
            'role' => 'user'
        ]
    ],
    'email' => [
        'host' => 'product-catalog.ru',
        'port' => 587,
        'mailbox' => [
            'register' => [
                'username' => 'test@product-catalog.ru',
                'password' => 'test'
            ],
            'no-reply' => [
                'username' => 'test@product-catalog.ru',
                'password' => 'test'
            ],
            'admin' => [
                'username' => 'test@product-catalog.ru',
                'password' => 'test'
            ],
            'support' => [
                'username' => 'test@product-catalog.ru',
                'password' => 'test'
            ],
            'sales' => [
                'username' => 'test@product-catalog.ru',
                'password' => 'test'
            ],
            'content' => [
                'username' => 'test@product-catalog.ru',
                'password' => 'test'
            ],
            'test' => [
                'username' => 'test@product-catalog.ru',
                'password' => 'test'
            ]
        ]
    ]
];