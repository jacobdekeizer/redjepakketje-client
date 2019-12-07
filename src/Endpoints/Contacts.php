<?php

namespace jacobdekeizer\Endpoints;

use jacobdekeizer\Exceptions\RedJePakketjeException;
use jacobdekeizer\Resources\Contact;
use jacobdekeizer\Resources\ContactsList;

class Contacts extends Base
{
    /**
     * @return ContactsList
     * @throws RedJePakketjeException
     */
    public function all(): ContactsList
    {
        $data = $this->client->doRequest('GET', 'contacts');

        return ContactsList::fromArray((array) $data);
    }

    /**
     * @param Contact $contact
     * @return Contact
     * @throws RedJePakketjeException
     */
    public function create(Contact $contact): Contact
    {
        $response = $this->client->doRequest('POST', 'contacts', json_encode($contact->toRequest()));

        $data = ((array) $response)['data'] ?? [];

        return Contact::fromArray((array) $data);
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

        $data = ((array) $response)['data'] ?? [];

        return Contact::fromArray((array) $data);
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

        $data = ((array) $response)['data'] ?? [];

        return Contact::fromArray((array) $data);
    }
}