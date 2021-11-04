<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Parameters\ReturnShipments;

use JacobDeKeizer\RedJePakketje\Parameters\BaseParameter;
use JacobDeKeizer\RedJePakketje\QueryParameters\QueryParameterBuilder;

class All extends BaseParameter
{
    private int $perPage = 100;

    private ?int $page = null;

    private ?string $pickupBefore = null;

    private ?string $pickupAfter = null;

    private ?string $deliveryBefore = null;

    private ?string $deliveryAfter = null;

    public function setPerPage(int $perPage): static
    {
        $this->perPage = $perPage;
        return $this;
    }

    public function getPerPage(): int
    {
        return $this->perPage;
    }

    public function setPage(?int $page): static
    {
        $this->page = $page;
        return $this;
    }

    public function getPage(): ?int
    {
        return $this->page;
    }

    public function setPickupBefore(?string $pickupBefore): static
    {
        $this->pickupBefore = $pickupBefore;
        return $this;
    }

    public function getPickupBefore(): ?string
    {
        return $this->pickupBefore;
    }

    public function setPickupAfter(?string $pickupAfter): static
    {
        $this->pickupAfter = $pickupAfter;
        return $this;
    }

    public function getPickupAfter(): ?string
    {
        return $this->pickupAfter;
    }

    public function setDeliveryBefore(?string $deliveryBefore): static
    {
        $this->deliveryBefore = $deliveryBefore;
        return $this;
    }

    public function getDeliveryBefore(): ?string
    {
        return $this->deliveryBefore;
    }

    public function setDeliveryAfter(?string $deliveryAfter): static
    {
        $this->deliveryAfter = $deliveryAfter;
        return $this;
    }

    public function getDeliveryAfter(): ?string
    {
        return $this->deliveryAfter;
    }

    public function toQuery(): string
    {
        return (new QueryParameterBuilder())
            ->addOptionalParameter('per_page', $this->getPerPage())
            ->addOptionalParameter('page', $this->getPage())
            ->addOptionalParameter('pickup_before', $this->getPickupBefore())
            ->addOptionalParameter('pickup_after', $this->getPickupAfter())
            ->addOptionalParameter('delivery_before', $this->getDeliveryBefore())
            ->addOptionalParameter('delivery_after', $this->getDeliveryAfter())
            ->toQueryString();
    }
}
