<?php

namespace jacobdekeizer\Resources;

use jacobdekeizer\Contracts\Dto;
use jacobdekeizer\Traits\FromArray;

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