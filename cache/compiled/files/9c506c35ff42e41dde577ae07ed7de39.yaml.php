<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Development/GDP Accounts Traditional/grav/grav-admin/user/themes/quark-open-publishing/blueprints/default.yaml',
    'modified' => 1719437947,
    'size' => 910,
    'data' => [
        'title' => 'Git Sync Options',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'content' => [
                                    'markdown' => true,
                                    'default' => 'Your page content goes here.'
                                ]
                            ]
                        ],
                        'options' => [
                            'type' => 'tab',
                            'fields' => [
                                'gitsyncoptions' => [
                                    'type' => 'section',
                                    'title' => 'Git Sync Link',
                                    'underline' => true
                                ],
                                'header.hide_git_sync_repo_link' => [
                                    'type' => 'toggle',
                                    'label' => 'Display Git Sync Link',
                                    'help' => 'Determines if the Git Repository link is displayed for this page',
                                    'default' => 0,
                                    'highlight' => 0,
                                    'options' => [
                                        0 => 'Yes',
                                        1 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
