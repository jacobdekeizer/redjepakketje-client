<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Shipment;

use JacobDeKeizer\RedJePakketje\Contracts\ToRequest;
use JacobDeKeizer\RedJePakketje\Models\BaseModel;
use JacobDeKeizer\RedJePakketje\Traits;

class ProductOption extends BaseModel implements ToRequest
{
    use Traits\ToRequest;

    public const OPTION_ALLOW_NEIGHBOURS = 'allow_neighbours';
    public const OPTION_REQUIRE_SIGNATURE = 'require_signature';
    public const OPTION_AGE_CHECK_18 = 'age_check_18';
    public const OPTION_PERISHABLE = 'perishable';
    public const ADDRESS_IMMUTABLE = 'address_immutable';

    public string $option;

    public bool $value;

    public ?int $maxAttempts = null;

    public function setOption(string $option): static
    {
        $this->option = $option;
        return $this;
    }

    public function getOption(): string
    {
        return $this->option;
    }

    public function setValue(bool $value): static
    {
        $this->value = $value;
        return $this;
    }

    public function isValue(): bool
    {
        return $this->value ?? false;
    }

    public function setMaxAttempts(?int $maxAttempts): static
    {
        $this->maxAttempts = $maxAttempts;
        return $this;
    }

    public function getMaxAttempts(): ?int
    {
        return $this->maxAttempts;
    }

    public function removeFromRequestData(string $key): bool
    {
        if ($key === 'max_attempts' && $this->getOption() !== self::OPTION_PERISHABLE) {
            return true;
        }

        return false;
    }
}
