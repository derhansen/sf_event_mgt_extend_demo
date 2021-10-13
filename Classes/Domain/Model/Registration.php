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
    protected bool $hotelRoomNeeded = false;
    protected string $fax = '';

    public function getHotelRoomNeeded(): bool
    {
        return $this->hotelRoomNeeded;
    }

    public function setHotelRoomNeeded(bool $hotelRoomNeeded)
    {
        $this->hotelRoomNeeded = $hotelRoomNeeded;
    }

    public function isHotelRoomNeeded(): bool
    {
        return $this->hotelRoomNeeded;
    }

    public function getFax(): string
    {
        return $this->fax;
    }

    public function setFax(string $fax)
    {
        $this->fax = $fax;
    }
}
