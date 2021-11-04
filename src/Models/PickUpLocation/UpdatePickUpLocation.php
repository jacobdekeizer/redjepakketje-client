<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\PickUpLocation;

use JacobDeKeizer\RedJePakketje\Contracts\ToRequest;
use JacobDeKeizer\RedJePakketje\Models\BaseModel;
use JacobDeKeizer\RedJePakketje\Traits;

class UpdatePickUpLocation extends BaseModel implements ToRequest
{
    use Traits\ToRequest;

    /**
     * @var int[]
     */
    private array $availableDays;

    /**
     * @return int[]
     */
    public function getAvailableDays(): array
    {
        return $this->availableDays;
    }

    /**
     * @param int[] $availableDays
     */
    public function setAvailableDays(array $availableDays): static
    {
        $this->availableDays = $availableDays;
        return $this;
    }
}
