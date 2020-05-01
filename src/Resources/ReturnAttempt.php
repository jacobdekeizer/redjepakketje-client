<?php

namespace JacobDeKeizer\RedJePakketje\Resources;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;
use JacobDeKeizer\RedJePakketje\Traits\FromArray;

class ReturnAttempt implements Dto
{
    use FromArray;

    /**
     * @var string|null
     */
    private $datetime;

    /**
     * @var string|null
     */
    private $receiverSignature;

    /**
     * @var bool|null
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
     * @return ReturnAttempt
     */
    public function setDatetime(?string $datetime): ReturnAttempt
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
     * @param null|string $receiverSignature
     * @return ReturnAttempt
     */
    public function setReceiverSignature(?string $receiverSignature): ReturnAttempt
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
     * @param bool|null $succesful
     * @return ReturnAttempt
     */
    public function setSuccesful(?bool $succesful): ReturnAttempt
    {
        $this->succesful = $succesful;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSuccesful(): bool
    {
        return (bool) $this->succesful;
    }

    /**
     * @param null|string $statusText
     * @return ReturnAttempt
     */
    public function setStatusText(?string $statusText): ReturnAttempt
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
     * @return ReturnAttempt
     */
    public function setStatus(?string $status): ReturnAttempt
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
