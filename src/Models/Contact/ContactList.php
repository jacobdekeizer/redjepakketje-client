<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Contact;

use JacobDeKeizer\RedJePakketje\Models\SimpleList;

/**
 * @extends SimpleList<Contact>
 */
class ContactList extends SimpleList
{
    protected function createDataResourceFromArray(array $data): Contact
    {
        return Contact::fromArray($data);
    }
}
