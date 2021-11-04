<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Shipment;

use JacobDeKeizer\RedJePakketje\Contracts\ToRequest;
use JacobDeKeizer\RedJePakketje\Models\BaseModel;
use JacobDeKeizer\RedJePakketje\Traits;

class UpdateShipment extends BaseModel implements ToRequest
{
    use Traits\ToRequest;

    private string $product;

    public function getProduct(): string
    {
        return $this->product;
    }

    public function setProduct(string $product): static
    {
        $this->product = $product;
        return $this;
    }
}
