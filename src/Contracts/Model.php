<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Contracts;

interface Model
{
    public static function fromArray(array $data): static;
}
