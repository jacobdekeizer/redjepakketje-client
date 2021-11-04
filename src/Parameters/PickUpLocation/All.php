<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Parameters\PickUpLocation;

use JacobDeKeizer\RedJePakketje\Contracts\Model;
use JacobDeKeizer\RedJePakketje\Contracts\Parameter;
use JacobDeKeizer\RedJePakketje\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\RedJePakketje\Traits\FromArray;

class All implements Model, Parameter
{
    use FromArray;

    private ?string $type = null;

    public static function fromArray(array $data): static
    {
        return self::createFromArray($data);
    }

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
