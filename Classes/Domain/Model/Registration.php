<?php
namespace DERHANSEN\SfEventMgtExtendDemo\Domain\Model;

/*
 * This file is part of the Extension "sf_event_mgt_extend_demo" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * Registration
 */
class Registration extends \DERHANSEN\SfEventMgt\Domain\Model\Registration
{
    /**
     * hotelRoomNeeded
     *
     * @var boolean
     */
    protected $hotelRoomNeeded = false;

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
    public function getHotelRoomNeeded()
    {
        return $this->hotelRoomNeeded;
    }

    /**
     * Sets the hotelRoomNeeded
     *
     * @param boolean $hotelRoomNeeded
     * @return void
     */
    public function setHotelRoomNeeded($hotelRoomNeeded)
    {
        $this->hotelRoomNeeded = $hotelRoomNeeded;
    }

    /**
     * Returns the boolean state of hotelRoomNeeded
     *
     * @return boolean
     */
    public function isHotelRoomNeeded()
    {
        return $this->hotelRoomNeeded;
    }

    /**
     * Returns the fax
     *
     * @return string $fax
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets the fax
     *
     * @param string $fax
     * @return void
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }
}
