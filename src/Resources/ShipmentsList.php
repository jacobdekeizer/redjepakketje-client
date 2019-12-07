<?php

namespace jacobdekeizer\Resources;

use jacobdekeizer\Contracts\Dto;
use jacobdekeizer\Traits\FromArray;

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