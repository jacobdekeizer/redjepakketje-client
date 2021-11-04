<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Endpoints;

use JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException;
use JacobDeKeizer\RedJePakketje\Models\PickUpLocation\CreatePickUpLocation;
use JacobDeKeizer\RedJePakketje\Models\PickUpLocation\PickUpLocation;
use JacobDeKeizer\RedJePakketje\Models\PickUpLocation\PickUpLocationList;
use JacobDeKeizer\RedJePakketje\Models\PickUpLocation\UpdatePickUpLocation;
use JacobDeKeizer\RedJePakketje\Parameters\PickUpLocation as Parameters;

class PickUpLocationsEndpoint extends BaseEndpoint
{
    private const ENDPOINT = 'pick-up-locations';

    /**
     * @throws RedJePakketjeException
     */
    public function all(?Parameters\All $parameter = null): PickUpLocationList
    {
        if ($parameter === null) {
            $parameter = new Parameters\All();
        }

        $apiRoute = self::ENDPOINT . $parameter->toQuery();

        $response = $this->doRequest(self::GET, $apiRoute);

        return PickUpLocationList::fromArray($response);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function get(string $uuid): PickUpLocation
    {
        $apiRoute = self::ENDPOINT . '/' . $uuid;

        $response = $this->doRequest(self::GET, $apiRoute);

        return PickUpLocation::fromArray($response['data']);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function create(CreatePickUpLocation $pickUpLocation): PickUpLocation
    {
        $response = $this->doRequest(self::POST, self::ENDPOINT, $pickUpLocation->toRequest());

        return PickUpLocation::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function update(string $uuid, UpdatePickUpLocation $pickUpLocation): PickUpLocation
    {
        $apiRoute =  self::ENDPOINT . '/' . $uuid;

        $response = $this->doRequest(self::PATCH, $apiRoute, $pickUpLocation->toRequest());

        return PickUpLocation::fromArray($response['data'] ?? []);
    }
}
