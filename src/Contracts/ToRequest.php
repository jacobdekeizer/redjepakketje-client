<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Contracts;

interface ToRequest
{
    public function toRequest(): array;
}
