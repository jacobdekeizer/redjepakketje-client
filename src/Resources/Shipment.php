<?php

namespace JacobDeKeizer\RedJePakketje\Resources;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;
use JacobDeKeizer\RedJePakketje\Contracts\HasShipmentProduct;
use JacobDeKeizer\RedJePakketje\Contracts\ToRequest;
use JacobDeKeizer\RedJePakketje\Traits;

class Shipment implements Dto, ToRequest, HasShipmentProduct
{
    use Traits\FromArray, Traits\ToRequest;

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
    private $senderName;

    /**
     * @var string|null
     */
    private $deliveryDate;

    /**
     * @var string|null
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
     * @param null|string $companyName
     * @return Shipment
     */
    public function setCompanyName(?string $companyName): Shipment
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
     * @return Shipment
     */
    public function setName(?string $name): Shipment
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
     * @return Shipment
     */
    public function setStreet(?string $street): Shipment
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
     * @return Shipment
     */
    public function setHouseNumber(?string $houseNumber): Shipment
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
     * @return Shipment
     */
    public function setHouseNumberExtension(?string $houseNumberExtension): Shipment
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
     * @return Shipment
     */
    public function setZipcode(?string $zipcode): Shipment
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
     * @return Shipment
     */
    public function setCity(?string $city): Shipment
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
     * @return Shipment
     */
    public function setTelephone(?string $telephone): Shipment
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
     * @return Shipment
     */
    public function setEmail(?string $email): Shipment
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
     * @return Shipment
     */
    public function setReference(?string $reference): Shipment
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
     * @return Shipment
     */
    public function setNote(?string $note): Shipment
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
     * @param null|string $senderName
     * @return Shipment
     */
    public function setSenderName(?string $senderName): Shipment
    {
        $this->senderName = $senderName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSenderName(): ?string
    {
        return $this->senderName;
    }

    /**
     * @param null|string $deliveryDate
     * @return Shipment
     */
    public function setDeliveryDate(?string $deliveryDate): Shipment
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    /**
     * @param null|string $pickUpPoint
     * @return Shipment
     */
    public function setPickUpPoint(?string $pickUpPoint): Shipment
    {
        $this->pickUpPoint = $pickUpPoint;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPickUpPoint(): ?string
    {
        return $this->pickUpPoint;
    }

    /**
     * @param null|string $product
     * @return Shipment
     */
    public function setProduct(?string $product): Shipment
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
     * @param ProductOption[]|null $productOptions
     * @return Shipment
     */
    public function setProductOptions(?array $productOptions): Shipment
    {
        $this->productOptions = $productOptions;
        return $this;
    }

    /**
     * @return ProductOption[]|null
     */
    public function getProductOptions(): ?array
    {
        return $this->productOptions;
    }

    /**
     * {@inheritdoc}
     */
    protected function covertToData(string $key, $value)
    {
        if ($key === 'pick_up_point') {
            return [
                'uuid' => $value,
            ];
        } elseif ($key === 'product_options' && is_array($value)) {
            return array_map(static function (ProductOption $productOption) {
                return $productOption->toRequest();
            }, $value);
        }

        return $value;
    }
}
