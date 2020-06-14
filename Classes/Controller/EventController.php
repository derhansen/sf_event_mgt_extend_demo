<?php
namespace DERHANSEN\SfEventMgtExtendDemo\Controller;

/*
 * This file is part of the Extension "sf_event_mgt_extend_demo" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use TYPO3\CMS\Extbase\Annotation as Extbase;

/**
 * EventController
 */
class EventController extends \DERHANSEN\SfEventMgt\Controller\EventController
{
    /**
     * Saves the registration
     *
     * @param $registration \DERHANSEN\SfEventMgt\Domain\Model\Registration
     * @param $event \DERHANSEN\SfEventMgt\Domain\Model\Event
     *
     * @Extbase\Validate("DERHANSEN\SfEventMgt\Validation\Validator\RegistrationFieldValidator", param="registration")
     * @Extbase\Validate("DERHANSEN\SfEventMgt\Validation\Validator\RegistrationValidator", param="registration")
     *
     * @return void
     */
    public function saveRegistrationAction(
        \DERHANSEN\SfEventMgt\Domain\Model\Registration $registration,
        \DERHANSEN\SfEventMgt\Domain\Model\Event $event
    ) {
        // Only for demonstration purposes. Please note, that you should execute your custom code before calling
        // the parent::saveRegistrationAction, since parent::saveRegistrationAction redirects to another action
        // and your code will never be executed when placed after parent::saveRegistrationAction.
        parent::saveRegistrationAction($registration, $event);
    }
}
