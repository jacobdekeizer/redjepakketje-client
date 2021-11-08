<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Sender;

use JacobDeKeizer\RedJePakketje\Contracts\ToRequest;
use JacobDeKeizer\RedJePakketje\Models\BaseModel;
use JacobDeKeizer\RedJePakketje\Traits;

class DeactivateSender extends BaseModel implements ToRequest
{
    use Traits\ToRequest;

    private string $inactiveFrom;

    public function getInactiveFrom(): string
    {
        return $this->inactiveFrom;
    }

    public function setInactiveFrom(string $inactiveFrom): static
    {
        $this->inactiveFrom = $inactiveFrom;
        return $this;
    }
}
