<?php

namespace JacobDeKeizer\RedJePakketje\Endpoints;

use JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException;
use JacobDeKeizer\RedJePakketje\Resources\PickUpPoint;
use JacobDeKeizer\RedJePakketje\Resources\PickUpPointsList;

class PickUpPoints extends Base
{
    /**
     * @return PickUpPointsList
     * @throws RedJePakketjeException
     */
    public function all(): PickUpPointsList
    {
        $response = $this->client->doRequest('GET', 'pick-up-points');

        return PickUpPointsList::fromArray($response);
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

        return PickUpPoint::fromArray($response['data']);
    }
}
