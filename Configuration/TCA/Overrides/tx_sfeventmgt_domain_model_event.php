<?php
defined('TYPO3_MODE') or die();

$fields = [
	'entrance' => [
		'exclude' => 1,
		'label' => 'LLL:EXT:sf_event_mgt_extend_demo/Resources/Private/Language/locallang_db.xlf:tx_sfeventmgtextenddemo_domain_model_event.entrance',
		'config' => [
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
        ],
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_sfeventmgt_domain_model_event', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_sfeventmgt_domain_model_event', 'entrance', '', 'after:enddate');