<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models;

use JacobDeKeizer\RedJePakketje\Contracts\Model;

/**
 * @template T
 */
abstract class SimpleList extends BaseModel
{
    private int $count;

    private array $data;

    public function setCount(int $count): static
    {
        $this->count = $count;
        return $this;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param T[] $data
     */
    public function setData(array $data): static
    {
        $this->data = [];

        foreach ($data as $item) {
            $this->data[] = $this->createDataResourceFromArray($item);
        }

        return $this;
    }

    /**
     * @return T[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    abstract protected function createDataResourceFromArray(array $data): Model;
}
