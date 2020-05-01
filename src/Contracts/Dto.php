<?php

namespace JacobDeKeizer\RedJePakketje\Contracts;

interface Dto
{
    /**
     * @param array $data
     * @return Dto
     */
    public static function fromArray(array $data);
}
