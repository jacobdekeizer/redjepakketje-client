<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\QueryParameters;

class QueryParameterRequired extends QueryParameterOptional
{
    public function toQueryString(): ?string
    {
        return $this->getParameter() . '=' . urlencode($this->getValue());
    }
}
