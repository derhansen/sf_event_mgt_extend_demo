<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

//if (!isset($GLOBALS['TCA']['tx_sfeventmgt_domain_model_registration']['ctrl']['type'])) {
//	if (file_exists($GLOBALS['TCA']['tx_sfeventmgt_domain_model_registration']['ctrl']['dynamicConfigFile'])) {
//		require_once($GLOBALS['TCA']['tx_sfeventmgt_domain_model_registration']['ctrl']['dynamicConfigFile']);
//	}
//	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
//	$GLOBALS['TCA']['tx_sfeventmgt_domain_model_registration']['ctrl']['type'] = 'tx_extbase_type';
//	$tempColumns = array();
//	$tempColumns[$GLOBALS['TCA']['tx_sfeventmgt_domain_model_registration']['ctrl']['type']] = array(
//		'exclude' => 1,
//		'label'   => 'LLL:EXT:sf_event_mgt_extend_demo/Resources/Private/Language/locallang_db.xlf:tx_sfeventmgtextenddemo.tx_extbase_type',
//		'config' => array(
//			'type' => 'select',
//			'items' => array(),
//			'size' => 1,
//			'maxitems' => 1,
//		)
//	);
//	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_sfeventmgt_domain_model_registration', $tempColumns, 1);
//}
//
//if (!isset($GLOBALS['TCA']['tx_sfeventmgt_domain_model_event']['ctrl']['type'])) {
//	if (file_exists($GLOBALS['TCA']['tx_sfeventmgt_domain_model_event']['ctrl']['dynamicConfigFile'])) {
//		require_once($GLOBALS['TCA']['tx_sfeventmgt_domain_model_event']['ctrl']['dynamicConfigFile']);
//	}
//	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
//	$GLOBALS['TCA']['tx_sfeventmgt_domain_model_event']['ctrl']['type'] = 'tx_extbase_type';
//	$tempColumns = array();
//	$tempColumns[$GLOBALS['TCA']['tx_sfeventmgt_domain_model_event']['ctrl']['type']] = array(
//		'exclude' => 1,
//		'label'   => 'LLL:EXT:sf_event_mgt_extend_demo/Resources/Private/Language/locallang_db.xlf:tx_sfeventmgtextenddemo.tx_extbase_type',
//		'config' => array(
//			'type' => 'select',
//			'items' => array(),
//			'size' => 1,
//			'maxitems' => 1,
//		)
//	);
//	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_sfeventmgt_domain_model_event', $tempColumns, 1);
//}
//
//$tmp_sf_event_mgt_extend_demo_columns = array(
//	'entrance' => array(
//		'exclude' => 1,
//		'label' => 'LLL:EXT:sf_event_mgt_extend_demo/Resources/Private/Language/locallang_db.xlf:tx_sfeventmgtextenddemo_domain_model_event.entrance',
//		'config' => array(
//			'type' => 'input',
//			'size' => 30,
//			'eval' => 'trim'
//		),
//	),
//);
//
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_sfeventmgt_domain_model_event',$tmp_sf_event_mgt_extend_demo_columns);
//
//$GLOBALS['TCA']['tx_sfeventmgt_domain_model_event']['types']['Tx_SfEventMgtExtendDemo_Event']['showitem'] = $TCA['tx_sfeventmgt_domain_model_event']['types']['1']['showitem'];
//$GLOBALS['TCA']['tx_sfeventmgt_domain_model_event']['types']['Tx_SfEventMgtExtendDemo_Event']['showitem'] .= ',--div--;LLL:EXT:sf_event_mgt_extend_demo/Resources/Private/Language/locallang_db.xlf:tx_sfeventmgtextenddemo_domain_model_event,';
//$GLOBALS['TCA']['tx_sfeventmgt_domain_model_event']['types']['Tx_SfEventMgtExtendDemo_Event']['showitem'] .= 'entrance';
//
//$GLOBALS['TCA']['tx_sfeventmgt_domain_model_event']['columns'][$TCA['tx_sfeventmgt_domain_model_event']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:sf_event_mgt_extend_demo/Resources/Private/Language/locallang_db.xlf:tx_sfeventmgt_domain_model_event.tx_extbase_type.Tx_SfEventMgtExtendDemo_Event','Tx_SfEventMgtExtendDemo_Event');
//
//$tmp_sf_event_mgt_extend_demo_columns = array(
//
//	'hotel_room_needed' => array(
//		'exclude' => 1,
//		'label' => 'LLL:EXT:sf_event_mgt_extend_demo/Resources/Private/Language/locallang_db.xlf:tx_sfeventmgtextenddemo_domain_model_registration.hotel_room_needed',
//		'config' => array(
//			'type' => 'check',
//			'default' => 0
//		)
//	),
//	'fax' => array(
//		'exclude' => 1,
//		'label' => 'LLL:EXT:sf_event_mgt_extend_demo/Resources/Private/Language/locallang_db.xlf:tx_sfeventmgtextenddemo_domain_model_registration.fax',
//		'config' => array(
//			'type' => 'input',
//			'size' => 30,
//			'eval' => 'trim'
//		),
//	),
//);
//
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_sfeventmgt_domain_model_registration',$tmp_sf_event_mgt_extend_demo_columns);
//
//$GLOBALS['TCA']['tx_sfeventmgt_domain_model_registration']['types']['Tx_SfEventMgtExtendDemo_Registration']['showitem'] = $TCA['tx_sfeventmgt_domain_model_registration']['types']['1']['showitem'];
//$GLOBALS['TCA']['tx_sfeventmgt_domain_model_registration']['types']['Tx_SfEventMgtExtendDemo_Registration']['showitem'] .= ',--div--;LLL:EXT:sf_event_mgt_extend_demo/Resources/Private/Language/locallang_db.xlf:tx_sfeventmgtextenddemo_domain_model_registration,';
//$GLOBALS['TCA']['tx_sfeventmgt_domain_model_registration']['types']['Tx_SfEventMgtExtendDemo_Registration']['showitem'] .= 'hotel_room_needed, fax';
//
//$GLOBALS['TCA']['tx_sfeventmgt_domain_model_registration']['columns'][$TCA['tx_sfeventmgt_domain_model_registration']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:sf_event_mgt_extend_demo/Resources/Private/Language/locallang_db.xlf:tx_sfeventmgt_domain_model_registration.tx_extbase_type.Tx_SfEventMgtExtendDemo_Registration','Tx_SfEventMgtExtendDemo_Registration');
//
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_sfeventmgt_domain_model_registration', $GLOBALS['TCA']['tx_sfeventmgt_domain_model_registration']['ctrl']['type'],'','after:' . $TCA['tx_sfeventmgt_domain_model_registration']['ctrl']['label']);
//
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_sfeventmgt_domain_model_event', $GLOBALS['TCA']['tx_sfeventmgt_domain_model_event']['ctrl']['type'],'','after:' . $TCA['tx_sfeventmgt_domain_model_event']['ctrl']['label']);
