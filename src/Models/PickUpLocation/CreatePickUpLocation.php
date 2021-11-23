<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\PickUpLocation;

use JacobDeKeizer\RedJePakketje\Contracts\ToRequest;
use JacobDeKeizer\RedJePakketje\Models\BaseModel;
use JacobDeKeizer\RedJePakketje\Traits;

class CreatePickUpLocation extends BaseModel implements ToRequest
{
    use Traits\ToRequest;

    private string $name;

    private string $street;

    private string $houseNumber;

    private ?string $houseNumberExtension;

    private string $zipcode;

    private string $city;

    /**
     * @var int[]
     */
    private array $availableDays;

    /**
     * @var string[]
     */
    private array $types;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
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

    public function getHouseNumberExtension(): ?string
    {
        return $this->houseNumberExtension;
    }

    public function setHouseNumberExtension(?string $houseNumberExtension): static
    {
        $this->houseNumberExtension = $houseNumberExtension;
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

    /**
     * @return int[]
     */
    public function getAvailableDays(): array
    {
        return $this->availableDays;
    }

    /**
     * @param int[] $availableDays
     */
    public function setAvailableDays(array $availableDays): static
    {
        $this->availableDays = $availableDays;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @param string[] $types
     */
    public function setTypes(array $types): static
    {
        $this->types = $types;
        return $this;
    }
}
