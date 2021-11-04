<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Sender;

use JacobDeKeizer\RedJePakketje\Models\SimpleList;

/**
 * @extends SimpleList<Sender>
 */
class SenderList extends SimpleList
{
    protected function createDataResourceFromArray(array $data): Sender
    {
        return Sender::fromArray($data);
    }
}
