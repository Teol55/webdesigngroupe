<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav/webdesign/grav-admin/user/config/plugins/simplesearch.yaml',
    'modified' => 1555520428,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'built_in_js' => true,
        'display_button' => true,
        'min_query_length' => 3,
        'route' => '/search',
        'search_content' => 'rendered',
        'filter_combinator' => 'and',
        'template' => 'simplesearch_results',
        'ignore_accented_characters' => true,
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ],
        'simplesearch' => [
            'route' => '@self',
            'filters' => [
                0 => '@self',
                1 => [
                    '@taxonomy' => [
                        0 => 'tag',
                        1 => 'author'
                    ]
                ],
                2 => [
                    '@author' => [
                        0 => 'name'
                    ]
                ]
            ],
            'filter_combinator' => 'and'
        ]
    ]
];
