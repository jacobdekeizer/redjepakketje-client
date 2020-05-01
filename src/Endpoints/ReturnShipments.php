<?php

namespace JacobDeKeizer\RedJePakketje\Endpoints;

use JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException;
use JacobDeKeizer\RedJePakketje\Parameters\ReturnShipments as Parameters;
use JacobDeKeizer\RedJePakketje\Resources\ReturnShipment;
use JacobDeKeizer\RedJePakketje\Resources\ReturnShipmentResponse;
use JacobDeKeizer\RedJePakketje\Resources\ReturnShipmentsList;

class ReturnShipments extends Base
{
    /**
     * @param Parameters\All|null $parameter
     * @return ReturnShipmentsList
     * @throws RedJePakketjeException
     */
    public function all(?Parameters\All $parameter = null): ReturnShipmentsList
    {
        $apiRoute = 'shipments' . ($parameter ? $parameter->toQuery() : null);

        $data = $this->client->doRequest('GET', $apiRoute);

        return ReturnShipmentsList::fromArray((array) $data);
    }

    /**
     * @param string $uuid
     * @return ReturnShipmentResponse
     * @throws RedJePakketjeException
     */
    public function get(string $uuid): ReturnShipmentResponse
    {
        $apiRoute = 'return-shipments/' . $uuid;

        $response = $this->client->doRequest('GET', $apiRoute);

        $data = ((array) $response)['data'] ?? [];

        return ReturnShipmentResponse::fromArray((array) $data);
    }

    /**
     * @param ReturnShipment $returnShipment
     * @return ReturnShipmentResponse
     * @throws RedJePakketjeException
     */
    public function create(ReturnShipment $returnShipment): ReturnShipmentResponse
    {
        $response = $this->client->doRequest('POST', 'return-shipments', json_encode($returnShipment->toRequest()));

        $data = ((array) $response)['data'] ?? [];

        return ReturnShipmentResponse::fromArray((array) $data);
    }
}
