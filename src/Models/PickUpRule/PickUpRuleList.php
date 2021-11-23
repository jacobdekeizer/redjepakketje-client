<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\PickUpRule;

use JacobDeKeizer\RedJePakketje\Models\SimpleList;

/**
 * @extends SimpleList<PickUpRule>
 */
class PickUpRuleList extends SimpleList
{
    protected function createDataResourceFromArray(array $data): PickUpRule
    {
        return PickUpRule::fromArray($data);
    }
}
