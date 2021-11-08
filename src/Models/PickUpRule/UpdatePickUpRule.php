<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\PickUpRule;

use JacobDeKeizer\RedJePakketje\Contracts\ToRequest;
use JacobDeKeizer\RedJePakketje\Models\BaseModel;
use JacobDeKeizer\RedJePakketje\Traits;

class UpdatePickUpRule extends BaseModel implements ToRequest
{
    use Traits\ToRequest;

    private ?string $startDate;

    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    public function setStartDate(?string $startDate): static
    {
        $this->startDate = $startDate;
        return $this;
    }
}
