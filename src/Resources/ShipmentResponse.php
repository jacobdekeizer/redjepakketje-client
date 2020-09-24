<?php

namespace JacobDeKeizer\RedJePakketje\Resources;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;
use JacobDeKeizer\RedJePakketje\Traits\FromArray;

class ShipmentResponse implements Dto
{
    use FromArray;

    /**
     * @var string|null
     */
    private $trackingcode;

    /**
     * @var string|null
     */
    private $companyName;

    /**
     * @var string|null
     */
    private $name;

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
    private $houseNumberExtension;

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
    private $telephone;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $reference;

    /**
     * @var string|null
     */
    private $note;

    /**
     * @var string|null
     */
    private $trackingUrl;

    /**
     * @var string|null
     */
    private $label;

    /**
     * @var string|null
     */
    private $labelPdfUrl;

    /**
     * @var string|null
     */
    private $labelPngUrl;

    /**
     * @var string|null
     */
    private $labelZplUrl;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $expectedDeliveryDate;

    /**
     * @var string|null
     */
    private $expectedDeliveryTimeFrom;

    /**
     * @var string|null
     */
    private $expectedDeliveryTimeTo;

    /**
     * @var PickUpPoint|null
     */
    private $pickUpPoint;

    /**
     * @var string|null
     */
    private $product;

    /**
     * @var ProductOption[]|null
     */
    private $productOptions;

    /**
     * @var DeliveryAttempt[]|null
     */
    private $deliveryAttempts;

    /**
     * @var Event[]|null
     */
    private $events;

    /**
     * @return null|string
     */
    public function getTrackingcode(): ?string
    {
        return $this->trackingcode;
    }

    /**
     * @param null|string $trackingcode
     * @return ShipmentResponse
     */
    public function setTrackingcode(?string $trackingcode): ShipmentResponse
    {
        $this->trackingcode = $trackingcode;
        return $this;
    }

    /**
     * @param null|string $companyName
     * @return ShipmentResponse
     */
    public function setCompanyName(?string $companyName): ShipmentResponse
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param null|string $name
     * @return ShipmentResponse
     */
    public function setName(?string $name): ShipmentResponse
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
     * @param null|string $street
     * @return ShipmentResponse
     */
    public function setStreet(?string $street): ShipmentResponse
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
     * @return ShipmentResponse
     */
    public function setHouseNumber(?string $houseNumber): ShipmentResponse
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
     * @param null|string $houseNumberExtension
     * @return ShipmentResponse
     */
    public function setHouseNumberExtension(?string $houseNumberExtension): ShipmentResponse
    {
        $this->houseNumberExtension = $houseNumberExtension;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getHouseNumberExtension(): ?string
    {
        return $this->houseNumberExtension;
    }

    /**
     * @param null|string $zipcode
     * @return ShipmentResponse
     */
    public function setZipcode(?string $zipcode): ShipmentResponse
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
     * @return ShipmentResponse
     */
    public function setCity(?string $city): ShipmentResponse
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
     * @param null|string $telephone
     * @return ShipmentResponse
     */
    public function setTelephone(?string $telephone): ShipmentResponse
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
     * @param null|string $email
     * @return ShipmentResponse
     */
    public function setEmail(?string $email): ShipmentResponse
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param null|string $reference
     * @return ShipmentResponse
     */
    public function setReference(?string $reference): ShipmentResponse
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
     * @param null|string $note
     * @return ShipmentResponse
     */
    public function setNote(?string $note): ShipmentResponse
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param null|string $trackingUrl
     * @return ShipmentResponse
     */
    public function setTrackingUrl(?string $trackingUrl): ShipmentResponse
    {
        $this->trackingUrl = $trackingUrl;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTrackingUrl(): ?string
    {
        return $this->trackingUrl;
    }

    /**
     * @param null|string $label
     * @return ShipmentResponse
     */
    public function setLabel(?string $label): ShipmentResponse
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param null|string $labelPdfUrl
     * @return ShipmentResponse
     */
    public function setLabelPdfUrl(?string $labelPdfUrl): ShipmentResponse
    {
        $this->labelPdfUrl = $labelPdfUrl;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLabelPdfUrl(): ?string
    {
        return $this->labelPdfUrl;
    }

    /**
     * @param null|string $labelPngUrl
     * @return ShipmentResponse
     */
    public function setLabelPngUrl(?string $labelPngUrl): ShipmentResponse
    {
        $this->labelPngUrl = $labelPngUrl;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLabelPngUrl(): ?string
    {
        return $this->labelPngUrl;
    }

    /**
     * @param null|string $labelZplUrl
     * @return ShipmentResponse
     */
    public function setLabelZplUrl(?string $labelZplUrl): ShipmentResponse
    {
        $this->labelZplUrl = $labelZplUrl;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLabelZplUrl(): ?string
    {
        return $this->labelZplUrl;
    }

    /**
     * @param null|string $status
     * @return ShipmentResponse
     */
    public function setStatus(?string $status): ShipmentResponse
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return bool
     */
    public function isStatus(string $status): bool
    {
        return $this->status === $status;
    }

    /**
     * @param null|string $expectedDeliveryDate
     * @return ShipmentResponse
     */
    public function setExpectedDeliveryDate(?string $expectedDeliveryDate): ShipmentResponse
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getExpectedDeliveryDate(): ?string
    {
        return $this->expectedDeliveryDate;
    }

    /**
     * @param null|string $expectedDeliveryTimeFrom
     * @return ShipmentResponse
     */
    public function setExpectedDeliveryTimeFrom(?string $expectedDeliveryTimeFrom): ShipmentResponse
    {
        $this->expectedDeliveryTimeFrom = $expectedDeliveryTimeFrom;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getExpectedDeliveryTimeFrom(): ?string
    {
        return $this->expectedDeliveryTimeFrom;
    }

    /**
     * @param null|string $expectedDeliveryTimeTo
     * @return ShipmentResponse
     */
    public function setExpectedDeliveryTimeTo(?string $expectedDeliveryTimeTo): ShipmentResponse
    {
        $this->expectedDeliveryTimeTo = $expectedDeliveryTimeTo;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getExpectedDeliveryTimeTo(): ?string
    {
        return $this->expectedDeliveryTimeTo;
    }

    /**
     * @param PickUpPoint|null $pickUpPoint
     * @return ShipmentResponse
     */
    public function setPickUpPoint(?PickUpPoint $pickUpPoint): ShipmentResponse
    {
        $this->pickUpPoint = $pickUpPoint;
        return $this;
    }

    /**
     * @return PickUpPoint|null
     */
    public function getPickUpPoint(): ?PickUpPoint
    {
        return $this->pickUpPoint;
    }

    /**
     * @param null|string $product
     * @return ShipmentResponse
     */
    public function setProduct(?string $product): ShipmentResponse
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getProduct(): ?string
    {
        return $this->product;
    }

    /**
     * @param null|ProductOption[] $productOptions
     * @return ShipmentResponse
     */
    public function setProductOptions(?array $productOptions): ShipmentResponse
    {
        $this->productOptions = $productOptions;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getProductOptions(): ?string
    {
        return $this->productOptions;
    }

    /**
     * @param DeliveryAttempt[]|null $deliveryAttempts
     * @return ShipmentResponse
     */
    public function setDeliveryAttempts(?array $deliveryAttempts): ShipmentResponse
    {
        $this->deliveryAttempts = $deliveryAttempts;
        return $this;
    }

    /**
     * @return DeliveryAttempt[]|null
     */
    public function getDeliveryAttempts(): ?array
    {
        return $this->deliveryAttempts;
    }

    /**
     * @param Event[]|null $events
     * @return ShipmentResponse
     */
    public function setEvents(?array $events): ShipmentResponse
    {
        $this->events = $events;
        return $this;
    }

    /**
     * @return Event[]|null
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function convertFromData(string $key, $value)
    {
        if ($key === 'pick_up_point' && $value !== null) {
            return PickUpPoint::fromArray($value);
        } elseif ($key === 'delivery_attempts' && is_array($value)) {
            return array_map(static function ($data): DeliveryAttempt {
                return DeliveryAttempt::fromArray($data);
            }, $value);
        } elseif ($key === 'events' && is_array($value)) {
            return array_map(static function ($data): Event {
                return Event::fromArray($data);
            }, $value);
        }

        return $value;
    }
}
