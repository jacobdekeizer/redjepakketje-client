<?php

namespace JacobDeKeizer\RedJePakketje\Contracts;

interface Parameter
{
    /**
     * @return string
     */
    public function toQuery(): string;
}