<?php

namespace JacobDeKeizer\RedJePakketje\Resources;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;
use JacobDeKeizer\RedJePakketje\Contracts\ToRequest;
use JacobDeKeizer\RedJePakketje\Traits;

class PickUpPoint implements Dto, ToRequest
{
    use Traits\FromArray, Traits\ToRequest;

    /**
     * @var string|null
     */
    private $uuid;

    /**
     * @var string|null
     */
    private $reference;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $telephone;

    /**
     * @var string|null
     */
    private $street;

    /**
     * @var string|null
     */
    private $houseNumber;

    /**
     * @var string|null
     */
    private $zipcode;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var array
     */
    private $availableDays;

    /**
     * @var string|null
     */
    private $cutOffTime;

    /**
     * @var Contact
     */
    private $contact;

    /**
     * @param null|string $uuid
     * @return PickUpPoint
     */
    public function setUuid(?string $uuid): PickUpPoint
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    /**
     * @param null|string $reference
     * @return PickUpPoint
     */
    public function setReference(?string $reference): PickUpPoint
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * @param null|string $name
     * @return PickUpPoint
     */
    public function setName(?string $name): PickUpPoint
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $telephone
     * @return PickUpPoint
     */
    public function setTelephone(?string $telephone): PickUpPoint
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param null|string $street
     * @return PickUpPoint
     */
    public function setStreet(?string $street): PickUpPoint
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param null|string $houseNumber
     * @return PickUpPoint
     */
    public function setHouseNumber(?string $houseNumber): PickUpPoint
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    /**
     * @param null|string $zipcode
     * @return PickUpPoint
     */
    public function setZipcode(?string $zipcode): PickUpPoint
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    /**
     * @param null|string $city
     * @return PickUpPoint
     */
    public function setCity(?string $city): PickUpPoint
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param null|string $state
     * @return PickUpPoint
     */
    public function setState(?string $state): PickUpPoint
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param null|string $country
     * @return PickUpPoint
     */
    public function setCountry(?string $country): PickUpPoint
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param array $availableDays
     * @return PickUpPoint
     */
    public function setAvailableDays(array $availableDays): PickUpPoint
    {
        $this->availableDays = $availableDays;
        return $this;
    }

    /**
     * @return array
     */
    public function getAvailableDays(): array
    {
        return $this->availableDays;
    }

    /**
     * @param null|string $cutOffTime
     * @return PickUpPoint
     */
    public function setCutOffTime(?string $cutOffTime): PickUpPoint
    {
        $this->cutOffTime = $cutOffTime;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCutOffTime(): ?string
    {
        return $this->cutOffTime;
    }

    /**
     * @param Contact|null $contact
     * @return PickUpPoint
     */
    public function setContact(?Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function convertFromData(string $key, $value)
    {
        if ($key === 'contact' && $value !== null) {
            return Contact::fromArray((array) $value);
        }

        return $value;
    }
}