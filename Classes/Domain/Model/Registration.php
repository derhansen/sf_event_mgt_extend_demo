<?php
namespace DERHANSEN\SfEventMgtExtendDemo\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Torben Hansen <derhansen@gmail.com>, Skyfillers GmbH
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
 * Registration
 */
class Registration extends \DERHANSEN\SfEventMgt\Domain\Model\Registration {

	/**
	 * hotelRoomNeeded
	 *
	 * @var boolean
	 */
	protected $hotelRoomNeeded = FALSE;

	/**
	 * fax
	 *
	 * @var string
	 */
	protected $fax = '';

	/**
	 * Returns the hotelRoomNeeded
	 *
	 * @return boolean $hotelRoomNeeded
	 */
	public function getHotelRoomNeeded() {
		return $this->hotelRoomNeeded;
	}

	/**
	 * Sets the hotelRoomNeeded
	 *
	 * @param boolean $hotelRoomNeeded
	 * @return void
	 */
	public function setHotelRoomNeeded($hotelRoomNeeded) {
		$this->hotelRoomNeeded = $hotelRoomNeeded;
	}

	/**
	 * Returns the boolean state of hotelRoomNeeded
	 *
	 * @return boolean
	 */
	public function isHotelRoomNeeded() {
		return $this->hotelRoomNeeded;
	}

	/**
	 * Returns the fax
	 *
	 * @return string $fax
	 */
	public function getFax() {
		return $this->fax;
	}

	/**
	 * Sets the fax
	 *
	 * @param string $fax
	 * @return void
	 */
	public function setFax($fax) {
		$this->fax = $fax;
	}

}