<?php

namespace JacobDeKeizer\RedJePakketje\Resources;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;
use JacobDeKeizer\RedJePakketje\Traits\FromArray;

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
