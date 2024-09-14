<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:\\Development\\GDP Accounts Traditional\\grav\\grav-admin\\user\\plugins\\feed/blueprints/feed.yaml',
    'modified' => 1719437893,
    'size' => 447,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'blog' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.feed.limit' => [
                                    'type' => 'text',
                                    'label' => 'Feed count',
                                    'default' => 10,
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'header.feed.title' => [
                                    'type' => 'text',
                                    'label' => 'Feed title'
                                ],
                                'header.feed.description' => [
                                    'type' => 'text',
                                    'label' => 'Feed description'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
