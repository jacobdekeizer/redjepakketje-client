<?php

namespace JacobDeKeizer\RedJePakketje\Parameters\ReturnShipments;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;
use JacobDeKeizer\RedJePakketje\Contracts\Parameter;
use JacobDeKeizer\RedJePakketje\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\RedJePakketje\Traits\FromArray;

class All implements Dto, Parameter
{
    use FromArray;

    /**
     * @var int|null
     */
    private $perPage;

    /**
     * @var int|null
     */
    private $page;

    /**
     * @var string|null
     */
    private $pickupBefore;

    /**
     * @var string|null
     */
    private $pickupAfter;

    /**
     * @var string|null
     */
    private $deliveryBefore;

    /**
     * @var string|null
     */
    private $deliveryAfter;

    /**
     * @param int|null $perPage
     * @return All
     */
    public function setPerPage(?int $perPage): All
    {
        $this->perPage = $perPage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    /**
     * @param int|null $page
     * @return All
     */
    public function setPage(?int $page): All
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param null|string $pickupBefore
     * @return All
     */
    public function setPickupBefore(?string $pickupBefore): All
    {
        $this->pickupBefore = $pickupBefore;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPickupBefore(): ?string
    {
        return $this->pickupBefore;
    }

    /**
     * @param null|string $pickupAfter
     * @return All
     */
    public function setPickupAfter(?string $pickupAfter): All
    {
        $this->pickupAfter = $pickupAfter;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPickupAfter(): ?string
    {
        return $this->pickupAfter;
    }

    /**
     * @param null|string $deliveryBefore
     * @return All
     */
    public function setDeliveryBefore(?string $deliveryBefore): All
    {
        $this->deliveryBefore = $deliveryBefore;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDeliveryBefore(): ?string
    {
        return $this->deliveryBefore;
    }

    /**
     * @param null|string $deliveryAfter
     * @return All
     */
    public function setDeliveryAfter(?string $deliveryAfter): All
    {
        $this->deliveryAfter = $deliveryAfter;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDeliveryAfter(): ?string
    {
        return $this->deliveryAfter;
    }

    /**
     * {@inheritdoc}
     */
    public function toQuery(): string
    {
        return (new QueryParameterBuilder)
            ->addOptionalParameter('per_page', $this->getPerPage())
            ->addOptionalParameter('page', $this->getPage())
            ->addOptionalParameter('pickup_before', $this->getPickupBefore())
            ->addOptionalParameter('pickup_after', $this->getPickupAfter())
            ->addOptionalParameter('delivery_before', $this->getDeliveryBefore())
            ->addOptionalParameter('delivery_after', $this->getDeliveryAfter())
            ->toQueryString();
    }
}