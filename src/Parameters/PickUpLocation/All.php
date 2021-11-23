<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Parameters\PickUpLocation;

use JacobDeKeizer\RedJePakketje\Parameters\BaseParameter;
use JacobDeKeizer\RedJePakketje\QueryParameters\QueryParameterBuilder;

class All extends BaseParameter
{
    private ?string $type = null;

    public function setType(?string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function toQuery(): string
    {
        return (new QueryParameterBuilder())
            ->addOptionalParameter('type', $this->getType())
            ->toQueryString();
    }
}
