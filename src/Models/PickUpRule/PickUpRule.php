<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\PickUpRule;

use JacobDeKeizer\RedJePakketje\Models\BaseModel;

class PickUpRule extends BaseModel
{
    private string $uuid;

    private string $pickUpLocation;

    private string $startDate;

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): static
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getPickUpLocation(): string
    {
        return $this->pickUpLocation;
    }

    public function setPickUpLocation(string $pickUpLocation): static
    {
        $this->pickUpLocation = $pickUpLocation;
        return $this;
    }

    public function getStartDate(): string
    {
        return $this->startDate;
    }

    public function setStartDate(string $startDate): static
    {
        $this->startDate = $startDate;
        return $this;
    }
}
