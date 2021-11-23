<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\QueryParameters;

use JacobDeKeizer\RedJePakketje\Contracts\QueryParameter;

class QueryParameterSort implements QueryParameter
{
    private string $parameter;

    private ?string $column;

    private ?string $direction;

    public function __construct(string $parameter, ?string $column, ?string $direction = null)
    {
        $this->parameter = $parameter;
        $this->column = $column;
        $this->direction = $direction;
    }

    public function getParameter(): string
    {
        return $this->parameter;
    }

    public function getColumn(): ?string
    {
        return $this->column;
    }

    public function getDirection(): ?string
    {
        return $this->direction;
    }

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
