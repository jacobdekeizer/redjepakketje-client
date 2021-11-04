<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Shipment;

use JacobDeKeizer\RedJePakketje\Models\SimpleList;

class ShipmentList extends SimpleList
{
    protected function createDataResourceFromArray(array $data): Shipment
    {
        return Shipment::fromArray($data);
    }
}
