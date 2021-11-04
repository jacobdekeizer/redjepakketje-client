<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\ReturnShipment;

use JacobDeKeizer\RedJePakketje\Models\SimpleList;

/**
 * @extends SimpleList<ReturnShipment>
 */
class ReturnShipmentList extends SimpleList
{
    protected function createDataResourceFromArray(array $data): ReturnShipment
    {
        return ReturnShipment::fromArray($data);
    }
}
