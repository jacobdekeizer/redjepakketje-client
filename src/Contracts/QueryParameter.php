<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Contracts;

interface QueryParameter
{
    public function toQueryString(): ?string;
}
