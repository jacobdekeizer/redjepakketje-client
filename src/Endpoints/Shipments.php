<?php

namespace JacobDeKeizer\RedJePakketje\Endpoints;

use JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException;
use JacobDeKeizer\RedJePakketje\Parameters\Shipments as Parameters;
use JacobDeKeizer\RedJePakketje\Resources\Shipment;
use JacobDeKeizer\RedJePakketje\Resources\ShipmentsList;
use JacobDeKeizer\RedJePakketje\Resources\ShipmentResponse;

class Shipments extends Base
{
    /**
     * @param Parameters\All|null $parameter
     * @return ShipmentsList
     * @throws RedJePakketjeException
     */
    public function all(?Parameters\All $parameter = null): ShipmentsList
    {
        if ($parameter === null) {
            $parameter = new Parameters\All();
        }

        $apiRoute = 'shipments' . $parameter->toQuery();

        $response = $this->client->doRequest('GET', $apiRoute);

        return ShipmentsList::fromArray($response);
    }

    /**
     * @param string $trackingCode
     * @return ShipmentResponse
     * @throws RedJePakketjeException
     */
    public function get(string $trackingCode): ShipmentResponse
    {
        $apiRoute = 'shipments/' . $trackingCode;

        $response = $this->client->doRequest('GET', $apiRoute);

        return ShipmentResponse::fromArray($response['data']);
    }

    /**
     * @param Shipment $shipment
     * @param Parameters\Create|null $parameter
     * @return ShipmentResponse
     * @throws RedJePakketjeException
     */
    public function create(Shipment $shipment, ?Parameters\Create $parameter = null): ShipmentResponse
    {
        if ($parameter === null) {
            $parameter = new Parameters\Create();
        }

        $apiRoute = 'shipments' . $parameter->toQuery();

        $response = $this->client->doRequest('POST', $apiRoute, json_encode($shipment->toRequest()));

        return ShipmentResponse::fromArray($response['data'] ?? []);
    }

    /**
     * @param string $trackingCode
     * @return ShipmentResponse
     * @throws RedJePakketjeException
     */
    public function cancel(string $trackingCode): ShipmentResponse
    {
        $apiRoute = 'shipments/' . $trackingCode . '/cancel';

        $response = $this->client->doRequest('POST', $apiRoute);

        return ShipmentResponse::fromArray($response['data'] ?? []);
    }

    /**
     * @param string $trackingCode
     * @param Parameters\GetLabel|null $parameter
     * @return string
     * @throws RedJePakketjeException
     */
    public function getLabel(string $trackingCode, ?Parameters\GetLabel $parameter = null): string
    {
        if ($parameter === null) {
            $parameter = new Parameters\GetLabel();
        }

        $apiRoute = $this->client::BASE_ENDPOINT . '/shipments/' . $trackingCode . '/label' . $parameter->toQuery();

        $response = $this->client->doRawRequest('GET', $apiRoute);

        if ($response->getStatusCode() >= 400) {
            throw new RedJePakketjeException(
                'Error executing api call, StatusCode: ' . $response->getStatusCode(),
                $response->getStatusCode()
            );
        }

        return $response->getBody()->getContents();
    }
}
