<?php

namespace jacobdekeizer\Resources;

use jacobdekeizer\Contracts\Dto;
use jacobdekeizer\Traits\FromArray;

class DeliveryAttempt implements Dto
{
    use FromArray;

    /**
     * @var string|null
     */
    private $datetime;

    /**
     * @var string|null
     */
    private $receiverAddress;

    /**
     * @var string|null
     */
    private $receiverSignature;

    /**
     * @var bool
     */
    private $succesful;

    /**
     * @var string|null
     */
    private $statusText;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @param null|string $datetime
     * @return DeliveryAttempt
     */
    public function setDatetime(?string $datetime): DeliveryAttempt
    {
        $this->datetime = $datetime;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDatetime(): ?string
    {
        return $this->datetime;
    }

    /**
     * @param null|string $receiverAddress
     * @return DeliveryAttempt
     */
    public function setReceiverAddress(?string $receiverAddress): DeliveryAttempt
    {
        $this->receiverAddress = $receiverAddress;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getReceiverAddress(): ?string
    {
        return $this->receiverAddress;
    }

    /**
     * @param null|string $receiverSignature
     * @return DeliveryAttempt
     */
    public function setReceiverSignature(?string $receiverSignature): DeliveryAttempt
    {
        $this->receiverSignature = $receiverSignature;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getReceiverSignature(): ?string
    {
        return $this->receiverSignature;
    }

    /**
     * @param bool $succesful
     * @return DeliveryAttempt
     */
    public function setSuccesful(bool $succesful): DeliveryAttempt
    {
        $this->succesful = $succesful;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSuccesful(): bool
    {
        return $this->succesful;
    }

    /**
     * @param null|string $statusText
     * @return DeliveryAttempt
     */
    public function setStatusText(?string $statusText): DeliveryAttempt
    {
        $this->statusText = $statusText;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatusText(): ?string
    {
        return $this->statusText;
    }

    /**
     * @param null|string $status
     * @return DeliveryAttempt
     */
    public function setStatus(?string $status): DeliveryAttempt
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
}