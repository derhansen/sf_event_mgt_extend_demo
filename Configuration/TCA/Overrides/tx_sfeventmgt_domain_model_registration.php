<?php
defined('TYPO3_MODE') or die();

$fields = [
    'hotel_room_needed' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:sf_event_mgt_extend_demo/Resources/Private/Language/locallang_db.xlf:tx_sfeventmgtextenddemo_domain_model_registration.hotel_room_needed',
        'config' => [
            'type' => 'check',
            'default' => 0
        ]
    ],
    'fax' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:sf_event_mgt_extend_demo/Resources/Private/Language/locallang_db.xlf:tx_sfeventmgtextenddemo_domain_model_registration.fax',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_sfeventmgt_domain_model_registration', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_sfeventmgt_domain_model_registration',
    'hotel_room_needed, fax',
    '',
    'after:email'
);