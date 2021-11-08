<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Endpoints;

use JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException;
use JacobDeKeizer\RedJePakketje\Models\Sender\CreateSender;
use JacobDeKeizer\RedJePakketje\Models\Sender\DeactivateSender;
use JacobDeKeizer\RedJePakketje\Models\Sender\Sender;
use JacobDeKeizer\RedJePakketje\Models\Sender\SenderList;
use JacobDeKeizer\RedJePakketje\Models\Sender\UpdateSender;

class SendersEndpoint extends BaseEndpoint
{
    private const ENDPOINT = 'senders';

    /**
     * @throws RedJePakketjeException
     */
    public function all(): SenderList
    {
        $response = $this->doRequest(self::GET, self::ENDPOINT);

        return SenderList::fromArray($response);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function get(string $uuid): Sender
    {
        $apiRoute = self::ENDPOINT . '/' . $uuid;

        $response = $this->doRequest(self::GET, $apiRoute);

        return Sender::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function create(CreateSender $sender): Sender
    {
        $response = $this->doRequest(self::POST, self::ENDPOINT, $sender->toRequest());

        return Sender::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function update(string $uuid, UpdateSender $sender): Sender
    {
        $apiRoute = self::ENDPOINT . '/' . $uuid;

        $response = $this->doRequest(self::PATCH, $apiRoute, $sender->toRequest());

        return Sender::fromArray($response['data'] ?? []);
    }

    /**
     * @throws RedJePakketjeException
     */
    public function deactivate(string $uuid, DeactivateSender $sender): void
    {
        $apiRoute = self::ENDPOINT . '/' . $uuid;

        $this->doRequest(self::DELETE, $apiRoute, $sender->toRequest());
    }
}
