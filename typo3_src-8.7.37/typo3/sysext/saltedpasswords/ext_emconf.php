<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Salted user password hashes',
    'description' => 'Uses a password hashing framework for storing passwords. Integrates into the system extension "felogin". Use SSL or rsaauth to secure datatransfer! Please read the manual first!',
    'category' => 'services',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'version' => '8.7.37',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.37',
        ],
        'conflicts' => [],
        'suggests' => [
            'rsaauth' => ''
        ],
    ],
];
