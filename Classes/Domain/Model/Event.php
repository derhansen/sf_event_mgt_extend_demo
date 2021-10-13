<?php
namespace DERHANSEN\SfEventMgtExtendDemo\Domain\Model;

/*
 * This file is part of the Extension "sf_event_mgt_extend_demo" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * Event
 */
class Event extends \DERHANSEN\SfEventMgt\Domain\Model\Event
{
    protected string $entrance = '';

    public function getEntrance(): string
    {
        return $this->entrance;
    }

    public function setEntrance(string $entrance)
    {
        $this->entrance = $entrance;
    }
}
