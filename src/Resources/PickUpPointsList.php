<?php

namespace jacobdekeizer\Resources;

use jacobdekeizer\Contracts\Dto;
use jacobdekeizer\Traits\FromArray;

class PickUpPointsList extends BaseSimpleList
{
    use FromArray;

    /**
     * @param array $data
     * @return Dto
     */
    protected function createDataResourceFromArray(array $data): Dto
    {
        return PickUpPoint::fromArray($data);
    }
}