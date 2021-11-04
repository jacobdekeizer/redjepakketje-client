<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\ReturnShipment;

use JacobDeKeizer\RedJePakketje\Models\BaseModel;

class ReturnAttempt extends BaseModel
{
    private string $datetime;

    private ?string $receiverSignature;

    private bool $succesful;

    private string $statusText;

    private string $status;

    public function setDatetime(string $datetime): static
    {
        $this->datetime = $datetime;
        return $this;
    }

    public function getDatetime(): ?string
    {
        return $this->datetime;
    }

    public function setReceiverSignature(?string $receiverSignature): static
    {
        $this->receiverSignature = $receiverSignature;
        return $this;
    }

    public function getReceiverSignature(): ?string
    {
        return $this->receiverSignature;
    }

    public function setSuccesful(bool $succesful): static
    {
        $this->succesful = $succesful;
        return $this;
    }

    public function isSuccesful(): bool
    {
        return $this->succesful;
    }

    public function setStatusText(string $statusText): static
    {
        $this->statusText = $statusText;
        return $this;
    }

    public function getStatusText(): ?string
    {
        return $this->statusText;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }
}
