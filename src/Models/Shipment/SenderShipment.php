<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Shipment;

use JacobDeKeizer\RedJePakketje\Models\Contact\Contact;
use JacobDeKeizer\RedJePakketje\Models\Sender\Sender;

class SenderShipment extends Sender
{
    private ?Contact $contact;

    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    public function setContact(?Contact $contact): static
    {
        $this->contact = $contact;
        return $this;
    }
}
