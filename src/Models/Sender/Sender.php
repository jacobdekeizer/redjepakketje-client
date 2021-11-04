<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Sender;

use JacobDeKeizer\RedJePakketje\Models\BaseModel;
use JacobDeKeizer\RedJePakketje\Traits;

class Sender extends BaseModel
{
    use Traits\FromArray;

    private string $uuid;

    private ?string $reference;

    private string $name;

    private ?string $telephone;

    private string $street;

    private string $houseNumber;

    private string $zipcode;

    private string $city;

    private ?string $state;

    private ?string $country;

    /**
     * @var int[]
     */
    private array $deliveryDays;

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): static
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): static
    {
        $this->reference = $reference;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): static
    {
        $this->street = $street;
        return $this;
    }

    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(string $houseNumber): static
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    public function setZipcode(string $zipcode): static
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): static
    {
        $this->state = $state;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): static
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getDeliveryDays(): array
    {
        return $this->deliveryDays;
    }

    /**
     * @param int[] $deliveryDays
     */
    public function setDeliveryDays(array $deliveryDays): static
    {
        $this->deliveryDays = $deliveryDays;
        return $this;
    }
}
