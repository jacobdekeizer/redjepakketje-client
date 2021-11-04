<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Endpoints;

use JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException;
use JacobDeKeizer\RedJePakketje\Models\PickUpRule\CreatePickUpRule;
use JacobDeKeizer\RedJePakketje\Models\PickUpRule\PickUpRule;
use JacobDeKeizer\RedJePakketje\Models\PickUpRule\PickUpRuleList;
use JacobDeKeizer\RedJePakketje\Models\PickUpRule\UpdatePickUpRule;

class PickUpRulesEndpoint extends BaseEndpoint
{
    private const ENDPOINT = 'pick-up-rules';

    /**
     * @throws RedJePakketjeException
     */
    public function all(string $senderUuid): PickUpRuleList
    {
        $response = $this->doRequest(self::GET, $this->makePath($senderUuid));

        return PickUpRuleList::fromArray($response);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function create(string $senderUuid, CreatePickUpRule $pickUpLocation): PickUpRule
    {
        $response = $this->doRequest(self::POST, $this->makePath($senderUuid), $pickUpLocation->toRequest());

        return PickUpRule::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function update(string $senderUuid, string $uuid, UpdatePickUpRule $pickUpLocation): PickUpRule
    {
        $apiRoute = $this->makePath($senderUuid) . '/' . $uuid;

        $response = $this->doRequest(self::PATCH, $apiRoute, $pickUpLocation->toRequest());

        return PickUpRule::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function delete(string $senderUuid, string $uuid): void
    {
        $apiRoute = $this->makePath($senderUuid) . '/' . $uuid;

        $this->doRequest(self::DELETE, $apiRoute);
    }

    private function makePath(string $senderUuid): string
    {
        return self::ENDPOINT . '/' . $senderUuid;
    }
}
