<?php

namespace JacobDeKeizer\RedJePakketje\Endpoints;

use JacobDeKeizer\RedJePakketje\Exceptions\RedJePakketjeException;
use JacobDeKeizer\RedJePakketje\Resources\CutOffTime;

class CutOffTimes extends Base
{
    /**
     * @param string $zipCode
     * @return CutOffTime
     * @throws RedJePakketjeException
     */
    public function get(string $zipCode): CutOffTime
    {
        $response = $this->client->doRequest('POST', 'cut-off-times', json_encode(['zipcode' => $zipCode]));

        $data = ((array) $response)['data'] ?? [];

        return CutOffTime::fromArray((array) $data);
    }
}
