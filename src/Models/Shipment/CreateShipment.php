<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Shipment;

use JacobDeKeizer\RedJePakketje\Contracts\ToRequest;
use JacobDeKeizer\RedJePakketje\Models\BaseModel;
use JacobDeKeizer\RedJePakketje\Traits;

class CreateShipment extends BaseModel implements ToRequest
{
    use Traits\ToRequest;

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

    private ?string $senderName;

    private ?string $deliveryDate;

    private string $sender;

    private ?string $product;

    /**
     * @var ProductOption[]
     */
    private array $productOptions = [];

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

    public function getSenderName(): ?string
    {
        return $this->senderName;
    }

    public function setSenderName(?string $senderName): static
    {
        $this->senderName = $senderName;
        return $this;
    }

    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate(?string $deliveryDate): static
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    public function getSender(): string
    {
        return $this->sender;
    }

    public function setSender(string $sender): static
    {
        $this->sender = $sender;
        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(?string $product): static
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

    protected function covertToRequestData(string $key, mixed $value): mixed
    {
        if ($key === 'sender') {
            return [
                'uuid' => $value,
            ];
        }

        return $value;
    }
}
