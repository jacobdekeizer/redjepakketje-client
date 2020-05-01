<?php

namespace JacobDeKeizer\RedJePakketje\Traits;

use JacobDeKeizer\RedJePakketje\Support\Str;

trait ToRequest
{
    /**
     * @return array
     */
    public function toRequest(): array
    {
        $data = [];

        $properties = get_object_vars($this);

        foreach ($properties as $key => $value) {
            $snakeKey = Str::snake($key);

            if ($this->removeFromRequestData($snakeKey)) {
                continue;
            }

            $value = $this->covertToData($snakeKey, $value);

            if ($value instanceof ToRequest) {
                $value = $value->toRequest();
            }

            $data[$snakeKey] = $value;
        }

        return $data;
    }

    /**
     * @param string $key
     * @return bool
     */
    protected function removeFromRequestData(string $key): bool
    {
        return false;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function covertToData(string $key, $value)
    {
        return $value;
    }
}
