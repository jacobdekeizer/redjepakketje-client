<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\PickUpRule;

use JacobDeKeizer\RedJePakketje\Contracts\ToRequest;
use JacobDeKeizer\RedJePakketje\Models\BaseModel;
use JacobDeKeizer\RedJePakketje\Traits;

class UpdatePickUpRule extends BaseModel implements ToRequest
{
    use Traits\ToRequest;

    private string $senderUuid;

    private string $pickUpRuleUuid;

    private ?string $startDate;

    private ?string $pickUpLocation;

    public function getSenderUuid(): string
    {
        return $this->senderUuid;
    }

    public function setSenderUuid(string $senderUuid): static
    {
        $this->senderUuid = $senderUuid;
        return $this;
    }

    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    public function setStartDate(?string $startDate): static
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getPickUpLocation(): ?string
    {
        return $this->pickUpLocation;
    }

    public function setPickUpLocation(?string $pickUpLocation): static
    {
        $this->pickUpLocation = $pickUpLocation;
        return $this;
    }
}
