<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'System Reports',
    'description' => 'The reports module groups several system reports.',
    'category' => 'module',
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '8.7.37',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.37',
        ],
        'conflicts' => [],
        'suggests' => [
            'scheduler' => ''
        ],
    ],
];
