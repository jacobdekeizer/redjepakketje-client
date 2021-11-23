<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Shipment;

use JacobDeKeizer\RedJePakketje\Models\PaginatedList;

/**
 * @extends PaginatedList<Shipment>
 */
class PaginatedShipmentList extends PaginatedList
{
    protected function createDataResourceFromArray(array $data): Shipment
    {
        return Shipment::fromArray($data);
    }
}
