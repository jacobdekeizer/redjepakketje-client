<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\ReturnShipment;

use JacobDeKeizer\RedJePakketje\Models\PaginatedList;

class PaginatedReturnShipmentList extends PaginatedList
{
    protected function createDataResourceFromArray(array $data): ReturnShipment
    {
        return ReturnShipment::fromArray($data);
    }
}
