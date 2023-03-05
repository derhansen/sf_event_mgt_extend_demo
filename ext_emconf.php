<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Event management - Extend Demo',
    'description' => 'A demo extension which shows, how to extend existing tables in sf_event_mgt',
    'category' => 'plugin',
    'author' => 'Torben Hansen',
    'author_email' => 'derhansen@gmail.com',
    'state' => 'beta',
    'uploadfolder' => '0',
    'clearCacheOnLoad' => 0,
    'version' => '0.6.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.2.0-12.4.99',
            'sf_event_mgt' => '7.0.0-7.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
