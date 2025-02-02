<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Development/GDP Accounts Traditional/grav/grav-admin/user/plugins/page-inject/blueprints.yaml',
    'modified' => 1719437899,
    'size' => 1613,
    'data' => [
        'name' => 'Page Inject',
        'type' => 'plugin',
        'slug' => 'page-inject',
        'version' => '2.1.6',
        'description' => '**Page Inject** is a powerful plugin that lets you inject entire pages or page content into other pages using simple markdown-style or shortcode syntax',
        'icon' => 'trello',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-page-inject',
        'keywords' => 'inject, embed, markdown',
        'bugs' => 'https://github.com/getgrav/grav-plugin-page-inject/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.25'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'active' => [
                    'type' => 'toggle',
                    'label' => 'Activate Site-Wide',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'This will ensure the plugin is activated site wide. You can override with page header options.'
                ],
                'processed_content' => [
                    'type' => 'toggle',
                    'label' => 'Processed Content',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'If enabled the page is pre-rendered before being injected, so relative paths work correctly'
                ],
                'remote_injections' => [
                    'type' => 'array',
                    'label' => 'Remote Injections',
                    'help' => 'Key should be a short slug, e.g. "dev", and the full URL should be "https://foo.com/path"',
                    'placeholder_key' => 'Short slug',
                    'placeholder_value' => 'Full Url'
                ]
            ]
        ]
    ]
];
