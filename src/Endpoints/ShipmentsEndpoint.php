<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Endpoints;

use JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException;
use JacobDeKeizer\RedJePakketje\Models\Shipment\CreateShipment;
use JacobDeKeizer\RedJePakketje\Models\Shipment\Shipment;
use JacobDeKeizer\RedJePakketje\Models\Shipment\PaginatedShipmentList;
use JacobDeKeizer\RedJePakketje\Models\Shipment\ShipmentList;
use JacobDeKeizer\RedJePakketje\Models\Shipment\UpdateShipment;
use JacobDeKeizer\RedJePakketje\Parameters\Shipments as Parameters;

class ShipmentsEndpoint extends BaseEndpoint
{
    private const ENDPOINT = 'shipments';

    /**
     * @throws RedJePakketjeException
     */
    public function all(?Parameters\All $parameter = null): PaginatedShipmentList
    {
        if ($parameter === null) {
            $parameter = new Parameters\All();
        }

        $apiRoute = self::ENDPOINT . $parameter->toQuery();

        $response = $this->doRequest(self::GET, $apiRoute);

        return PaginatedShipmentList::fromArray($response);
    }

    /**
     * Returns shipments which are created in the last 7 days
     *
     * @throws RedJePakketjeException
     */
    public function allRecentlyCreated(): ShipmentList
    {
        $response = $this->doRequest(self::GET, self::ENDPOINT);

        return ShipmentList::fromArray($response);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function get(string $trackingCode): Shipment
    {
        $apiRoute = self::ENDPOINT . '/' . $trackingCode;

        $response = $this->doRequest(self::GET, $apiRoute);

        return Shipment::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function create(CreateShipment $shipment, ?Parameters\Create $parameter = null): Shipment
    {
        if ($parameter === null) {
            $parameter = new Parameters\Create();
        }

        $apiRoute = self::ENDPOINT . $parameter->toQuery();

        $response = $this->doRequest(self::POST, $apiRoute, $shipment->toRequest());

        return Shipment::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function update(string $trackingCode, UpdateShipment $shipment): Shipment
    {
        $apiRoute = self::ENDPOINT . '/' . $trackingCode;

        $response = $this->doRequest(self::PATCH, $apiRoute, $shipment->toRequest());

        return Shipment::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function cancel(string $trackingCode): Shipment
    {
        $apiRoute = self::ENDPOINT . '/' . $trackingCode;

        $response = $this->doRequest(self::DELETE, $apiRoute);

        return Shipment::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function getLabel(string $trackingCode, ?Parameters\GetLabel $parameter = null): string
    {
        if ($parameter === null) {
            $parameter = new Parameters\GetLabel();
        }

        $apiRoute = $this->client::BASE_ENDPOINT . '/' . self::ENDPOINT
            . '/' . $trackingCode . '/label' . $parameter->toQuery();

        return $this->doRawRequest(self::GET, $apiRoute)->getBody()->getContents();
    }
}
