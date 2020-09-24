<?php

namespace JacobDeKeizer\RedJePakketje\Endpoints;

use JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException;
use JacobDeKeizer\RedJePakketje\Resources\Contact;
use JacobDeKeizer\RedJePakketje\Resources\ContactsList;

class Contacts extends Base
{
    /**
     * @return ContactsList
     * @throws RedJePakketjeException
     */
    public function all(): ContactsList
    {
        $response = $this->client->doRequest('GET', 'contacts');

        return ContactsList::fromArray($response);
    }

    /**
     * @param Contact $contact
     * @return Contact
     * @throws RedJePakketjeException
     */
    public function create(Contact $contact): Contact
    {
        $response = $this->client->doRequest('POST', 'contacts', json_encode($contact->toRequest()));

        return Contact::fromArray($response['data'] ?? []);
    }

    /**
     * @param string $uuid
     * @return Contact
     * @throws RedJePakketjeException
     */
    public function get(string $uuid): Contact
    {
        $apiRoute = 'contacts/' . $uuid;

        $response = $this->client->doRequest('GET', $apiRoute);

        return Contact::fromArray($response['data']);
    }

    /**
     * @param Contact $contact
     * @return Contact
     * @throws RedJePakketjeException
     */
    public function update(Contact $contact): Contact
    {
        $apiRoute = 'contacts/' . $contact->getUuid();

        $response = $this->client->doRequest('POST', $apiRoute, json_encode($contact->toRequest()));

        return Contact::fromArray($response['data'] ?? []);
    }
}
