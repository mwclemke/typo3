<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'User>Task Center',
    'description' => 'The Task Center is the framework for a host of other extensions, see below.',
    'category' => 'module',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
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
            'sys_action' => '8.7.37',
        ],
    ],
];
