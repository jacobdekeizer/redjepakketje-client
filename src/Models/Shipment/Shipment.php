<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Shipment;

use JacobDeKeizer\RedJePakketje\Models\BaseModel;

class Shipment extends BaseModel
{
    private string $trackingcode;

    private ?string $senderName;

    private ?string $companyName;

    private string $name;

    private string $street;

    private int $houseNumber;

    private ?string $houseNumberExtension;

    private string $zipcode;

    private string $city;

    private ?string $country;

    private ?string $state;

    private ?string $telephone;

    private ?string $email;

    private ?string $reference;

    private ?string $note;

    private string $trackingUrl;

    private string $labelPdfUrl;

    private string $labelPngUrl;

    private string $labelZplUrl;

    private ?string $label;

    private string $status;

    private string $expectedDeliveryDate;

    private ?string $expectedDeliveryTimeFrom;

    private ?string $expectedDeliveryTimeTo;

    private SenderShipment $sender;

    private string $product;

    /**
     * @var ProductOption[]
     */
    private array $productOptions = [];

    private int $customerDeliveryAttempts;

    /**
     * @var DeliveryAttempt[]
     */
    private array $deliveryAttempts = [];

    /**
     * @var ShipmentEvent[]
     */
    private array $events = [];

    public function getTrackingcode(): string
    {
        return $this->trackingcode;
    }

    public function setTrackingcode(string $trackingcode): static
    {
        $this->trackingcode = $trackingcode;
        return $this;
    }

    public function getSenderName(): ?string
    {
        return $this->senderName;
    }

    public function setSenderName(?string $senderName): static
    {
        $this->senderName = $senderName;
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

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): static
    {
        $this->country = $country;
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

    public function getLabelPdfUrl(): string
    {
        return $this->labelPdfUrl;
    }

    public function setLabelPdfUrl(string $labelPdfUrl): static
    {
        $this->labelPdfUrl = $labelPdfUrl;
        return $this;
    }

    public function getLabelPngUrl(): string
    {
        return $this->labelPngUrl;
    }

    public function setLabelPngUrl(string $labelPngUrl): static
    {
        $this->labelPngUrl = $labelPngUrl;
        return $this;
    }

    public function getLabelZplUrl(): string
    {
        return $this->labelZplUrl;
    }

    public function setLabelZplUrl(string $labelZplUrl): static
    {
        $this->labelZplUrl = $labelZplUrl;
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): static
    {
        $this->label = $label;
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

    public function getExpectedDeliveryDate(): string
    {
        return $this->expectedDeliveryDate;
    }

    public function setExpectedDeliveryDate(string $expectedDeliveryDate): static
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }

    public function getExpectedDeliveryTimeFrom(): ?string
    {
        return $this->expectedDeliveryTimeFrom;
    }

    public function setExpectedDeliveryTimeFrom(?string $expectedDeliveryTimeFrom): static
    {
        $this->expectedDeliveryTimeFrom = $expectedDeliveryTimeFrom;
        return $this;
    }

    public function getExpectedDeliveryTimeTo(): ?string
    {
        return $this->expectedDeliveryTimeTo;
    }

    public function setExpectedDeliveryTimeTo(?string $expectedDeliveryTimeTo): static
    {
        $this->expectedDeliveryTimeTo = $expectedDeliveryTimeTo;
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
     * @return ProductOption[]
     */
    public function getProductOptions(): array
    {
        return $this->productOptions;
    }

    public function setProductOptions(ProductOption ...$productOptions): static
    {
        $this->productOptions = $productOptions;
        return $this;
    }

    public function getCustomerDeliveryAttempts(): int
    {
        return $this->customerDeliveryAttempts;
    }

    public function setCustomerDeliveryAttempts(int $customerDeliveryAttempts): Shipment
    {
        $this->customerDeliveryAttempts = $customerDeliveryAttempts;
        return $this;
    }

    /**
     * @return DeliveryAttempt[]
     */
    public function getDeliveryAttempts(): array
    {
        return $this->deliveryAttempts;
    }

    public function setDeliveryAttempts(DeliveryAttempt ...$deliveryAttempts): static
    {
        $this->deliveryAttempts = $deliveryAttempts;
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
