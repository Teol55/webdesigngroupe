<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/grav/webdesign/grav-admin/user/plugins/mailchimp/blueprints.yaml',
    'modified' => 1554836586,
    'data' => [
        'name' => 'MailChimp',
        'version' => '0.0.4',
        'description' => 'Add MailChimp subscribe form action support',
        'icon' => 'plug',
        'author' => [
            'name' => 'Aaron Hipple',
            'email' => 'ahipple@gmail.com'
        ],
        'homepage' => 'https://github.com/aaronhipple/grav-plugin-mailchimp',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, plugin, mailchimp',
        'bugs' => 'https://github.com/aaronhipple/grav-plugin-mailchimp/issues',
        'docs' => 'https://github.com/aaronhipple/grav-plugin-mailchimp/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'MAILCHIMP_SETTINGS.ENABLED.LABEL',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'MAILCHIMP_SETTINGS.ENABLED.OPTIONS.1',
                        0 => 'MAILCHIMP_SETTINGS.ENABLED.OPTIONS.0'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'api_key' => [
                    'type' => 'password',
                    'label' => 'MAILCHIMP_SETTINGS.API_KEY.LABEL',
                    'help' => 'MAILCHIMP_SETTINGS.API_KEY.HELP'
                ],
                'language_detection_mode' => [
                    'type' => 'toggle',
                    'label' => 'MAILCHIMP_SETTINGS.LANGUAGE_DETECTION_MODE.LABEL',
                    'help' => 'MAILCHIMP_SETTINGS.LANGUAGE_DETECTION_MODE.HELP',
                    'default' => 'browser',
                    'options' => [
                        'browser' => 'Browser',
                        'active' => 'Active'
                    ]
                ],
                'default_language' => [
                    'type' => 'select',
                    'size' => 'long',
                    'label' => 'MAILCHIMP_SETTINGS.DEFAULT_LANGUAGE.LABEL',
                    'help' => 'MAILCHIMP_SETTINGS.DEFAULT_LANGUAGE.HELP',
                    'default' => 'en',
                    'data-options@' => '\\Grav\\Plugin\\MailChimpPlugin::supportedLanguages'
                ],
                'default_status' => [
                    'type' => 'toggle',
                    'label' => 'MAILCHIMP_SETTINGS.DEFAULT_STATUS.LABEL',
                    'help' => 'MAILCHIMP_SETTINGS.DEFAULT_STATUS.HELP',
                    'default' => 'subscribed',
                    'options' => [
                        'subscribed' => 'MAILCHIMP_SETTINGS.DEFAULT_STATUS.OPTIONS.SUBSCRIBED',
                        'pending' => 'MAILCHIMP_SETTINGS.DEFAULT_STATUS.OPTIONS.PENDING'
                    ]
                ],
                'delete_first' => [
                    'type' => 'toggle',
                    'label' => 'MAILCHIMP_SETTINGS.DELETE_FIRST.LABEL',
                    'help' => 'MAILCHIMP_SETTINGS.DELETE_FIRST.HELP',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
