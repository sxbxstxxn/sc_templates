<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'SC Template',
    'description' => 'A Template Extension from Sebastian Christoph',
    'category' => 'templates',
    'author' => 'Sebastian Christoph',
    'author_company' => 'Sebastian Christoph',
    'author_email' => 'admin@sebastian-christoph.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.9.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'Sxbxstxxn\\sc_template\\' => 'Classes'
        ]
    ],
];
