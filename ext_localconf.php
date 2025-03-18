<?php
defined('TYPO3') or die();

// xclass event domain model
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\DERHANSEN\SfEventMgt\Domain\Model\Event::class] = [
    'className' => \DERHANSEN\SfEventMgtExtendDemo\Domain\Model\Event::class
];

// xclass registration domain model
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\DERHANSEN\SfEventMgt\Domain\Model\Registration::class] = [
    'className' => \DERHANSEN\SfEventMgtExtendDemo\Domain\Model\Registration::class
];

// xclass EventController
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\DERHANSEN\SfEventMgt\Controller\EventController::class] = [
    'className' => \DERHANSEN\SfEventMgtExtendDemo\Controller\EventController::class
];
