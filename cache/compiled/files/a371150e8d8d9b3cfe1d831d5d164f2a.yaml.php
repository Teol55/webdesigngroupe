<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav/webdesign/grav-admin/user/plugins/simplesearch/simplesearch.yaml',
    'modified' => 1554548785,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'built_in_js' => true,
        'display_button' => true,
        'min_query_length' => 3,
        'route' => '/search',
        'search_content' => 'rendered',
        'template' => 'simplesearch_results',
        'filters' => [
            'category' => NULL
        ],
        'filter_combinator' => 'and',
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
                        0 => 'symfony'
                    ]
                ]
            ],
            'filter_combinator' => 'and'
        ]
    ]
];
