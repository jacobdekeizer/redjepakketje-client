<?php

namespace JacobDeKeizer\RedJePakketje\QueryParameters;

class QueryParameterRequired extends QueryParameterOptional
{
    /**
     * {@inheritDoc}
     */
    public function toQueryString(): ?string
    {
        return $this->getParameter() . '=' . $this->getValue();
    }
}
