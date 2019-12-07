<?php

namespace JacobDeKeizer\RedJePakketje\Resources;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;
use JacobDeKeizer\RedJePakketje\Traits\FromArray;

class ShipmentsList extends BaseList
{
    use FromArray;

    /**
     * {@inheritdoc}
     */
    protected function createDataResourceFromArray(array $data): Dto
    {
        return ShipmentResponse::fromArray($data);
    }
}