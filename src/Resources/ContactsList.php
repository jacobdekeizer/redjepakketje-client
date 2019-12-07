<?php

namespace JacobDeKeizer\RedJePakketje\Resources;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;
use JacobDeKeizer\RedJePakketje\Traits\FromArray;

class ContactsList extends BaseSimpleList
{
    use FromArray;

    /**
     * @param array $data
     * @return Dto
     */
    protected function createDataResourceFromArray(array $data): Dto
    {
        return Contact::fromArray($data);
    }
}