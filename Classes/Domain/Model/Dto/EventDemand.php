<?php
namespace DERHANSEN\SfEventMgtExtendDemo\Domain\Model\Dto;

class EventDemand extends \DERHANSEN\SfEventMgt\Domain\Model\Dto\EventDemand
{
    protected string $test = '';

    public function getTest(): string
    {
        return $this->test;
    }

    public function setTest(string $test): void
    {
        $this->test = $test;
    }
}
