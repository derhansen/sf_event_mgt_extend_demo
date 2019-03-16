<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Event management - Extend Demo',
    'description' => 'A demo extension which shows, how to extend existing tables in sf_event_mgt',
    'category' => 'plugin',
    'author' => 'Torben Hansen',
    'author_email' => 'derhansen@gmail.com',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.3.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.99-9.5.99',
            'sf_event_mgt' => '3.0.0-0.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
