<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\PickUpLocation;

use JacobDeKeizer\RedJePakketje\Models\SimpleList;

/**
 * @extends SimpleList<PickUpLocation>
 */
class PickUpLocationList extends SimpleList
{
    protected function createDataResourceFromArray(array $data): PickUpLocation
    {
        return PickUpLocation::fromArray($data);
    }
}
