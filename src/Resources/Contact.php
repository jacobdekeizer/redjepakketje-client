<?php

namespace jacobdekeizer\Resources;

use jacobdekeizer\Contracts\Dto;
use jacobdekeizer\Contracts\ToRequest;
use jacobdekeizer\Traits;

class Contact implements Dto, ToRequest
{
    use Traits\FromArray, Traits\ToRequest;

    public const GENDER_FEMALE = 'f';
    public const GENDER_MALE = 'm';

    /**
     * @var string|null
     */
    private $uuid;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var string|null
     */
    private $gender;

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
     * @param null|string $uuid
     * @return Contact
     */
    public function setUuid(?string $uuid): Contact
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
     * @param null|string $firstName
     * @return Contact
     */
    public function setFirstName(?string $firstName): Contact
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param null|string $lastName
     * @return Contact
     */
    public function setLastName(?string $lastName): Contact
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param null|string $gender
     * @return Contact
     */
    public function setGender(?string $gender): Contact
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param null|string $telephone
     * @return Contact
     */
    public function setTelephone(?string $telephone): Contact
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
     * @return Contact
     */
    public function setEmail(?string $email): Contact
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
     * @return Contact
     */
    public function setReference(?string $reference): Contact
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
     * @param string $key
     * @return bool
     */
    protected function removeFromRequestData(string $key)
    {
        if ($key === 'uuid') {
            return true;
        }

        return false;
    }
}