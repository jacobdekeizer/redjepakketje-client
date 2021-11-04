<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\ReturnShipment;

use JacobDeKeizer\RedJePakketje\Models\BaseModel;
use JacobDeKeizer\RedJePakketje\Models\Shipment\SenderShipment;
use JacobDeKeizer\RedJePakketje\Models\Shipment\ShipmentEvent;

class ReturnShipment extends BaseModel
{
    private string $uuid;

    private ?string $trackingcode;

    private ?string $receiverName;

    private ?string $companyName;

    private string $name;

    private string $street;

    private int $houseNumber;

    private ?string $houseNumberExtension;

    private string $zipcode;

    private string $city;

    private ?string $telephone;

    private ?string $email;

    private ?string $reference;

    private ?string $note;

    private ?string $trackingUrl;

    private string $status;

    private string $expectedPickUpDate;

    private string $expectedDeliveryDate;

    private ?string $expectedPickUpTimeFrom;

    private ?string $expectedPickUpTimeTo;

    private SenderShipment $sender;

    private string $product;

    /**
     * @var ReturnAttempt[]
     */
    private array $returnAttempts = [];

    /**
     * @var ShipmentEvent[]
     */
    private array $events = [];

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): static
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getTrackingcode(): string
    {
        return $this->trackingcode;
    }

    public function setTrackingcode(?string $trackingcode): static
    {
        $this->trackingcode = $trackingcode;
        return $this;
    }

    public function getReceiverName(): ?string
    {
        return $this->receiverName;
    }

    public function setReceiverName(?string $receiverName): static
    {
        $this->receiverName = $receiverName;
        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): static
    {
        $this->companyName = $companyName;
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

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): static
    {
        $this->street = $street;
        return $this;
    }

    public function getHouseNumber(): int
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(int $houseNumber): static
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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;
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

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): static
    {
        $this->note = $note;
        return $this;
    }

    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }

    public function setTrackingUrl(string $trackingUrl): static
    {
        $this->trackingUrl = $trackingUrl;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getExpectedPickUpDate(): string
    {
        return $this->expectedPickUpDate;
    }

    public function setExpectedPickUpDate(string $expectedPickUpDate): ReturnShipment
    {
        $this->expectedPickUpDate = $expectedPickUpDate;
        return $this;
    }

    public function getExpectedDeliveryDate(): string
    {
        return $this->expectedDeliveryDate;
    }

    public function setExpectedDeliveryDate(string $expectedDeliveryDate): static
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }

    public function getExpectedPickUpTimeFrom(): ?string
    {
        return $this->expectedPickUpTimeFrom;
    }

    public function setExpectedPickUpTimeFrom(?string $expectedPickUpTimeFrom): static
    {
        $this->expectedPickUpTimeFrom = $expectedPickUpTimeFrom;
        return $this;
    }

    public function getExpectedPickUpTimeTo(): ?string
    {
        return $this->expectedPickUpTimeTo;
    }

    public function setExpectedPickUpTimeTo(?string $expectedPickUpTimeTo): static
    {
        $this->expectedPickUpTimeTo = $expectedPickUpTimeTo;
        return $this;
    }

    public function getSender(): SenderShipment
    {
        return $this->sender;
    }

    public function setSender(SenderShipment $sender): static
    {
        $this->sender = $sender;
        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(string $product): static
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return ReturnAttempt[]
     */
    public function getReturnAttempts(): array
    {
        return $this->returnAttempts;
    }

    public function setReturnAttempts(ReturnAttempt ...$returnAttempts): static
    {
        $this->returnAttempts = $returnAttempts;
        return $this;
    }

    /**
     * @return ShipmentEvent[]
     */
    public function getEvents(): array
    {
        return $this->events;
    }

    public function setEvents(ShipmentEvent ...$events): static
    {
        $this->events = $events;
        return $this;
    }
}
