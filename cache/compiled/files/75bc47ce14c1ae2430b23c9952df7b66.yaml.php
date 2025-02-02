<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Development/GDP Accounts Traditional/grav/grav-admin/user/plugins/cors/blueprints.yaml',
    'modified' => 1719523416,
    'size' => 2666,
    'data' => [
        'name' => 'CORS',
        'version' => '1.0.2',
        'description' => 'Enables and allows to manage CORS (Cross-Origin Resource Sharing) in Grav',
        'icon' => 'universal-access',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-cors',
        'keywords' => 'cors, api, cross, origin, resource, sharing',
        'bugs' => 'https://github.com/getgrav/grav-plugin-cors/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'routes' => [
                    'type' => 'array',
                    'label' => 'Routes',
                    'size' => 'large',
                    'help' => 'List of Routes for which is desired to enable CORS. \'*\' (wildcard, default) means any route. RegEx allowed.',
                    'default' => [
                        0 => '*'
                    ],
                    'value_only' => true,
                    'placeholder_value' => '/api/*.json'
                ],
                'origins' => [
                    'type' => 'array',
                    'label' => 'Allow Origin',
                    'size' => 'large',
                    'help' => 'A full qualified URI string that will be the only origin allowed from remote. \'*\' (wildcard, default) allows any remote request',
                    'default' => [
                        0 => '*'
                    ],
                    'value_only' => true,
                    'placeholder_value' => 'https://clients.getgrav.org'
                ],
                'methods' => [
                    'type' => 'selectize',
                    'size' => 'large',
                    'label' => 'Allow Methods',
                    'classes' => 'fancy',
                    'help' => 'Which methods to allow with CORS.',
                    'default' => [
                        'OPTIONS' => 'OPTIONS',
                        'GET' => 'GET',
                        'HEAD' => 'HEAD',
                        'POST' => 'POST',
                        'PUT' => 'PUT',
                        'DELETE' => 'DELETE',
                        'TRACE' => 'TRACE',
                        'CONNECT' => 'CONNECT'
                    ],
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'allowHeaders' => [
                    'type' => 'array',
                    'label' => 'Allow Headers',
                    'size' => 'large',
                    'help' => 'Allow the server to receive the specified headers. For example: content-type',
                    'default' => [
                        
                    ],
                    'value_only' => true,
                    'placeholder_value' => 'content-type'
                ],
                'expose' => [
                    'type' => 'array',
                    'label' => 'Expose Headers',
                    'size' => 'large',
                    'help' => 'Allow the server to whitelist headers that browsers are allowed to access. For example: X-My-Custom-Header',
                    'default' => [
                        
                    ],
                    'value_only' => true,
                    'placeholder_value' => 'X-My-Custom-Header'
                ],
                'credentials' => [
                    'type' => 'toggle',
                    'label' => 'Allow Credentials',
                    'help' => 'The server can give permission to include cookies by enabling this option. When enabledan `Access-Control-Allow-Credentials` header will be set. Setting this response header to true means that the server allows cookies (or other user credentials) to be included on cross-origin requests.',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
