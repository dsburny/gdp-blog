<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/Development/GDP Accounts Traditional/grav/grav-admin/user/pages/01.blog/blog.md',
    'modified' => 1719439878,
    'size' => 191,
    'data' => [
        'header' => [
            'title' => NULL,
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true
            ],
            'template' => 'blog'
        ],
        'frontmatter' => 'title: null
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
template: blog',
        'markdown' => 'Your page content goes here.'
    ]
];
