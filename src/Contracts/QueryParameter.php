<?php

namespace JacobDeKeizer\RedJePakketje\Contracts;

interface QueryParameter
{
    /**
     * @return string|null
     */
    public function toQueryString(): ?string;
}