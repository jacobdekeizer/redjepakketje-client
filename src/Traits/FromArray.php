<?php

namespace JacobDeKeizer\RedJePakketje\Traits;

use JacobDeKeizer\RedJePakketje\Support\Str;

trait FromArray
{
    /**
     * {@inheritdoc}
     * @return self
     */
    public static function fromArray(array $data)
    {
        $instance = new self;

        foreach ($data as $key => $value) {
            $setMethod = 'set' . Str::studly(strtolower($key));

            if (method_exists($instance, $setMethod) === false) {
                continue;
            }

            $saveValue = $instance->convertFromData($key, $value);

            $instance->$setMethod($saveValue);
        }


        return $instance;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return mixed
     */
    protected function convertFromData(string $key, $value)
    {
        return $value;
    }
}
