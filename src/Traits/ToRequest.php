<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Traits;

use JacobDeKeizer\RedJePakketje\Support\Str;

trait ToRequest
{
    public function toRequest(): array
    {
        $data = [];

        $properties = get_object_vars($this);

        foreach ($properties as $key => $value) {
            $snakeKey = Str::snake($key);

            if ($this->removeFromRequestData($snakeKey)) {
                continue;
            }

            $value = $this->covertToRequestData($snakeKey, $value);

            if (is_array($value)) {
                $value = array_map(static function (mixed $val): mixed {
                    if ($val instanceof ToRequest) {
                        return $val->toRequest();
                    }

                    return $val;
                }, $value);
            } elseif ($value instanceof ToRequest) {
                $value = $value->toRequest();
            }

            $data[$snakeKey] = $value;
        }

        return $data;
    }

    protected function removeFromRequestData(string $key): bool
    {
        return false;
    }

    protected function covertToRequestData(string $key, mixed $value): mixed
    {
        return $value;
    }
}
