<?php
defined('TYPO3_MODE') || die('Access denied.');

use TYPO3\CMS\Core\Utility\GeneralUtility;

call_user_func(
    function () {
        // XCLASS event
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\DERHANSEN\SfEventMgt\Domain\Model\Event::class] = [
            'className' => \DERHANSEN\SfEventMgtExtendDemo\Domain\Model\Event::class
        ];

        // Register extended domain class
        GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
            ->registerImplementation(
                \DERHANSEN\SfEventMgt\Domain\Model\Event::class,
                \DERHANSEN\SfEventMgtExtendDemo\Domain\Model\Event::class
            );

        // XCLASS registration
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\DERHANSEN\SfEventMgt\Domain\Model\Registration::class] = [
            'className' => \DERHANSEN\SfEventMgtExtendDemo\Domain\Model\Registration::class
        ];

        // Register extended registration class
        GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
            ->registerImplementation(
                \DERHANSEN\SfEventMgt\Domain\Model\Registration::class,
                \DERHANSEN\SfEventMgtExtendDemo\Domain\Model\Registration::class
            );

        // XCLASS EventController
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\DERHANSEN\SfEventMgt\Controller\EventController::class] = [
            'className' => \DERHANSEN\SfEventMgtExtendDemo\Controller\EventController::class
        ];
    }
);
