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
    /**
     * entrance
     *
     * @var string
     */
    protected $entrance = '';

    /**
     * Returns the entrance
     *
     * @return string $entrance
     */
    public function getEntrance()
    {
        return $this->entrance;
    }

    /**
     * Sets the entrance
     *
     * @param string $entrance
     * @return void
     */
    public function setEntrance($entrance)
    {
        $this->entrance = $entrance;
    }
}