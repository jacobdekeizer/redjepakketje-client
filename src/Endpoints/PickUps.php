<?php

namespace jacobdekeizer\Endpoints;

use jacobdekeizer\Exceptions\RedJePakketjeException;
use jacobdekeizer\Resources\PickUpPoint;
use jacobdekeizer\Resources\PickUpPointsList;

class PickUps extends Base
{
    /**
     * @return PickUpPointsList
     * @throws RedJePakketjeException
     */
    public function all(): PickUpPointsList
    {
        $data = $this->client->doRequest('GET', 'pick-up-points');

        return PickUpPointsList::fromArray((array) $data);
    }

    /**
     * @param string $uuid
     * @return PickUpPoint|null
     * @throws RedJePakketjeException
     */
    public function get(string $uuid): PickUpPoint
    {
        $apiRoute = 'pick-up-points/' . $uuid;

        $response = $this->client->doRequest('GET', $apiRoute);

        $data = ((array) $response)['data'] ?? [];

        return PickUpPoint::fromArray((array) $data);
    }
}