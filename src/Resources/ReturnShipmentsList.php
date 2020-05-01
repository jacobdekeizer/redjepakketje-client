<?php

namespace JacobDeKeizer\RedJePakketje\Resources;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;
use JacobDeKeizer\RedJePakketje\Traits\FromArray;

class ReturnShipmentsList extends BaseList
{
    use FromArray;

    /**
     * {@inheritdoc}
     */
    protected function createDataResourceFromArray(array $data): Dto
    {
        return ReturnShipmentResponse::fromArray((array) $data);
    }
}
