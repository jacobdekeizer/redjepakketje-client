<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Endpoints;

use JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException;
use JacobDeKeizer\RedJePakketje\Models\ReturnShipment\CreateReturnShipment;
use JacobDeKeizer\RedJePakketje\Models\ReturnShipment\ReturnShipment;
use JacobDeKeizer\RedJePakketje\Models\ReturnShipment\PaginatedReturnShipmentList;
use JacobDeKeizer\RedJePakketje\Models\ReturnShipment\ReturnShipmentList;
use JacobDeKeizer\RedJePakketje\Parameters\ReturnShipments as Parameters;

class ReturnShipmentsEndpoint extends BaseEndpoint
{
    private const ENDPOINT = 'return-shipments';

    /**
     * @throws RedJePakketjeException
     */
    public function all(?Parameters\All $parameter = null): PaginatedReturnShipmentList
    {
        if ($parameter === null) {
            $parameter = new Parameters\All();
        }

        $apiRoute = self::ENDPOINT . $parameter->toQuery();

        $response = $this->doRequest(self::GET, $apiRoute);

        return PaginatedReturnShipmentList::fromArray($response);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function allWithoutFilter(): ReturnShipmentList
    {
        $response = $this->doRequest(self::GET, self::ENDPOINT);

        return ReturnShipmentList::fromArray($response);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function get(string $uuid): ReturnShipment
    {
        $apiRoute = self::ENDPOINT . '/' . $uuid;

        $response = $this->doRequest(self::GET, $apiRoute);

        return ReturnShipment::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function create(CreateReturnShipment $shipment): ReturnShipment
    {
        $response = $this->doRequest(self::POST, self::ENDPOINT, $shipment->toRequest());

        return ReturnShipment::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function cancel(string $uuid): ReturnShipment
    {
        $apiRoute = self::ENDPOINT . '/' . $uuid;

        $response = $this->doRequest(self::DELETE, $apiRoute);

        return ReturnShipment::fromArray($response['data'] ?? []);
    }
}
