<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Contracts;

interface Parameter
{
    public function toQuery(): string;
}
