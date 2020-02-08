<?php

namespace JacobDeKeizer\RedJePakketje\QueryParameters;

use JacobDeKeizer\RedJePakketje\Contracts\QueryParameter;

class QueryParameterSort implements QueryParameter
{
    /**
     * @var string
     */
    private $parameter;

    /**
     * @var string|null
     */
    private $column;

    /**
     * @var string|null
     */
    private $direction;

    /**
     * @param string $parameter
     * @param string|null $column
     * @param string|null $direction
     */
    public function __construct(string $parameter, ?string $column, ?string $direction = null)
    {
        $this->parameter = $parameter;
        $this->column = $column;
        $this->direction = $direction;
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
    public function getColumn(): ?string
    {
        return $this->column;
    }

    /**
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->direction;
    }

    /**
     * {@inheritDoc}
     */
    public function toQueryString(): ?string
    {
        if ($this->getColumn() === null) {
            return null;
        }

        $raw = $this->getParameter() . '=' . $this->getColumn();

        if ($this->getDirection()) {
            $raw .= '|' . $this->getDirection();
        }

        return $raw;
    }
}