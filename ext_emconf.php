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
    'version' => '0.5.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'sf_event_mgt' => '6.0.0-0.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
