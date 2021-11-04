<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Shipment;

use JacobDeKeizer\RedJePakketje\Models\BaseModel;

class ShipmentEvent extends BaseModel
{
    private string $oldStatus;

    private string $newStatus;

    private string $datetime;

    public function setOldStatus(string $oldStatus): static
    {
        $this->oldStatus = $oldStatus;
        return $this;
    }

    public function getOldStatus(): string
    {
        return $this->oldStatus;
    }

    public function setNewStatus(string $newStatus): static
    {
        $this->newStatus = $newStatus;
        return $this;
    }

    public function getNewStatus(): string
    {
        return $this->newStatus;
    }

    public function setDatetime(string $datetime): static
    {
        $this->datetime = $datetime;
        return $this;
    }

    public function getDatetime(): string
    {
        return $this->datetime;
    }
}
