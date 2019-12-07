<?php

namespace JacobDeKeizer\RedJePakketje\Resources;

use JacobDeKeizer\RedJePakketje\Traits\FromArray;

class ReturnShipmentResponse extends ShipmentResponse
{
    use FromArray;

    /**
     * @var string|null
     */
    private $uuid;

    /**
     * @var ReturnAttempt[]|null
     */
    private $returnAttempts;

    /**
     * @param null|string $uuid
     * @return ReturnShipmentResponse
     */
    public function setUuid(?string $uuid): ReturnShipmentResponse
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
     * @param ReturnAttempt[]|null $returnAttempts
     * @return ReturnShipmentResponse
     */
    public function setReturnAttempts(?array $returnAttempts): ReturnShipmentResponse
    {
        $this->returnAttempts = $returnAttempts;
        return $this;
    }

    /**
     * @return ReturnAttempt[]|null
     */
    public function getReturnAttempts(): ?array
    {
        return $this->returnAttempts;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function convertFromData(string $key, $value)
    {
        if ($key === 'return_attempts' && is_array($value)) {
            return array_map(static function ($data) {
                return ReturnAttempt::fromArray((array) $data);
            }, $value);
        }

        return parent::convertFromData($key, $value);
    }
}