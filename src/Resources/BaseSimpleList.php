<?php

namespace JacobDeKeizer\RedJePakketje\Resources;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;

abstract class BaseSimpleList implements Dto
{
    /**
     * @var int|null
     */
    private $count;

    /**
     * @var PickUpPoint[]|null
     */
    private $data;

    /**
     * @param int|null $count
     * @return BaseSimpleList
     */
    public function setCount(?int $count): BaseSimpleList
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @param PickUpPoint[]|null $data
     * @return BaseSimpleList
     */
    public function setData(?array $data): BaseSimpleList
    {
        $this->data = [];

        foreach ($data as $pickUpPoint) {
            $this->data[] = $this->createDataResourceFromArray((array) $pickUpPoint);
        }

        return $this;
    }

    /**
     * @return PickUpPoint[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return Dto
     */
    abstract protected function createDataResourceFromArray(array $data): Dto;
}