<?php

namespace JacobDeKeizer\RedJePakketje\QueryParameters;

use JacobDeKeizer\RedJePakketje\Contracts\QueryParameter;

class QueryParameterOptional implements QueryParameter
{
    /**
     * @var string $parameter
     */
    private $parameter;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @var string $parameter
     * @var mixed $value
     */
    public function __construct(string $parameter, $value)
    {
        $this->parameter = $parameter;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getParameter(): string
    {
        return $this->parameter;
    }

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        if ($this->value === null) {
            return null;
        }

        if (is_bool($this->value)) {
            return $this->value ? 'true' : 'false';
        }

        return (string) $this->value;
    }

    /**
     * {@inheritDoc}
     */
    public function toQueryString(): ?string
    {
        if ($this->getValue() === null) {
            return null;
        }

        return $this->getParameter() . '=' . $this->getValue();
    }
}