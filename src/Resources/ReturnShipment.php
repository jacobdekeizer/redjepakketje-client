<?php

namespace JacobDeKeizer\RedJePakketje\Resources;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;
use JacobDeKeizer\RedJePakketje\Contracts\HasShipmentProduct;
use JacobDeKeizer\RedJePakketje\Contracts\ToRequest;
use JacobDeKeizer\RedJePakketje\Traits;

class ReturnShipment implements Dto, ToRequest, HasShipmentProduct
{
    use Traits\FromArray, Traits\ToRequest;

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
    private $receiverName;

    /**
     * @var string|null
     */
    private $pickUpDate;

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
     * @param null|string $name
     * @return ReturnShipment
     */
    public function setName(?string $name): ReturnShipment
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
     * @return ReturnShipment
     */
    public function setStreet(?string $street): ReturnShipment
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
     * @return ReturnShipment
     */
    public function setHouseNumber(?string $houseNumber): ReturnShipment
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
     * @return ReturnShipment
     */
    public function setHouseNumberExtension(?string $houseNumberExtension): ReturnShipment
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
     * @return ReturnShipment
     */
    public function setZipcode(?string $zipcode): ReturnShipment
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
     * @return ReturnShipment
     */
    public function setCity(?string $city): ReturnShipment
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
     * @return ReturnShipment
     */
    public function setTelephone(?string $telephone): ReturnShipment
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
     * @return ReturnShipment
     */
    public function setEmail(?string $email): ReturnShipment
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
     * @return ReturnShipment
     */
    public function setReference(?string $reference): ReturnShipment
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
     * @return ReturnShipment
     */
    public function setNote(?string $note): ReturnShipment
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
     * @param null|string $receiverName
     * @return ReturnShipment
     */
    public function setReceiverName(?string $receiverName): ReturnShipment
    {
        $this->receiverName = $receiverName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getReceiverName(): ?string
    {
        return $this->receiverName;
    }

    /**
     * @param null|string $pickUpDate
     * @return ReturnShipment
     */
    public function setPickUpDate(?string $pickUpDate): ReturnShipment
    {
        $this->pickUpDate = $pickUpDate;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPickUpDate(): ?string
    {
        return $this->pickUpDate;
    }

    /**
     * @param null|string $pickUpPoint
     * @return ReturnShipment
     */
    public function setPickUpPoint(?string $pickUpPoint): ReturnShipment
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
     * @return ReturnShipment
     */
    public function setProduct(?string $product): ReturnShipment
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
     * @return ReturnShipment
     */
    public function setProductOptions(?array $productOptions): ReturnShipment
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
