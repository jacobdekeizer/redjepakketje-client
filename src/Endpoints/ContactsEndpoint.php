<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Endpoints;

use JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException;
use JacobDeKeizer\RedJePakketje\Models\Contact\Contact;
use JacobDeKeizer\RedJePakketje\Models\Contact\ContactList;
use JacobDeKeizer\RedJePakketje\Models\Contact\CreateContact;
use JacobDeKeizer\RedJePakketje\Models\Contact\UpdateContact;

class ContactsEndpoint extends BaseEndpoint
{
    private const ENDPOINT = 'contacts';

    /**
     * @throws RedJePakketjeException
     */
    public function all(): ContactList
    {
        $response = $this->doRequest(self::GET, self::ENDPOINT);

        return ContactList::fromArray($response);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function get(string $uuid): Contact
    {
        $apiRoute = self::ENDPOINT . '/' . $uuid;

        $response = $this->doRequest(self::GET, $apiRoute);

        return Contact::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function create(CreateContact $contact): Contact
    {
        $response = $this->doRequest(self::POST, self::ENDPOINT, $contact->toRequest());

        return Contact::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function update(string $uuid, UpdateContact $contact): Contact
    {
        $apiRoute = self::ENDPOINT . '/' . $uuid;

        $response = $this->doRequest(self::PATCH, $apiRoute, $contact->toRequest());

        return Contact::fromArray($response['data'] ?? []);
    }
}
