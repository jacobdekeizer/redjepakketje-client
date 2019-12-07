<?php

namespace jacobdekeizer\Resources;

use jacobdekeizer\Contracts\Dto;
use jacobdekeizer\Traits\FromArray;

class Event implements Dto
{
    use FromArray;

    /**
     * @var string
     */
    private $oldStatus;

    /**
     * @var string
     */
    private $newStatus;

    /**
     * @var string
     */
    private $datetime;

    /**
     * @param string $oldStatus
     * @return Event
     */
    public function setOldStatus(string $oldStatus): Event
    {
        $this->oldStatus = $oldStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getOldStatus(): string
    {
        return $this->oldStatus;
    }

    /**
     * @param string $newStatus
     * @return Event
     */
    public function setNewStatus(string $newStatus): Event
    {
        $this->newStatus = $newStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewStatus(): string
    {
        return $this->newStatus;
    }

    /**
     * @param string $datetime
     * @return Event
     */
    public function setDatetime(string $datetime): Event
    {
        $this->datetime = $datetime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatetime(): string
    {
        return $this->datetime;
    }
}