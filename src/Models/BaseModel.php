<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models;

use JacobDeKeizer\RedJePakketje\Contracts\Model;
use JacobDeKeizer\RedJePakketje\Traits\FromArray;

abstract class BaseModel implements Model
{
    use FromArray;

    public static function fromArray(array $data): static
    {
        return self::createFromArray($data);
    }
}
