<?php
$EM_CONF[$_EXTKEY] = array(
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
    'version' => '0.2.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-8.7.99',
            'sf_event_mgt' => '2.0.0-0.0.0',
            'extender' => '6.4.6-0.0.0'
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);
