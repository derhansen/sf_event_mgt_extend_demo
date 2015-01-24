<?php
namespace DERHANSEN\SfEventMgtExtendDemo\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Torben Hansen <t.hansen@skyfillers.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * EventController
 */
class EventController extends \DERHANSEN\SfEventMgt\Controller\EventController {

	/**
	 * Saves the registration
	 *
	 * @param $registration \DERHANSEN\SfEventMgtExtendDemo\Domain\Model\Registration
	 * @param $event \DERHANSEN\SfEventMgt\Domain\Model\Event
	 * @validate $registration \DERHANSEN\SfEventMgt\Validation\Validator\RegistrationValidator
	 * @return void
	 */
	public function saveRegistrationAction(\DERHANSEN\SfEventMgtExtendDemo\Domain\Model\Registration $registration, \DERHANSEN\SfEventMgt\Domain\Model\Event $event) {
		parent::saveRegistrationAction($registration, $event);
	}

}
