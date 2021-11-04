<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Parameters\Shipments;

use JacobDeKeizer\RedJePakketje\Parameters\BaseParameter;
use JacobDeKeizer\RedJePakketje\QueryParameters\QueryParameterBuilder;

class All extends BaseParameter
{
    private int $perPage = 100;

    private ?string $column = null;

    private ?string $direction = null;

    private ?int $page = null;

    private ?string $search = null;

    private ?string $before = null;

    private ?string $after = null;

    public function setPerPage(int $perPage): static
    {
        $this->perPage = $perPage;
        return $this;
    }

    public function getPerPage(): int
    {
        return $this->perPage;
    }

    public function setColumn(?string $column): static
    {
        $this->column = $column;
        return $this;
    }

    public function getColumn(): ?string
    {
        return $this->column;
    }

    public function setDirection(?string $direction): static
    {
        $this->direction = $direction;
        return $this;
    }

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setPage(?int $page): static
    {
        $this->page = $page;
        return $this;
    }

    public function getPage(): ?int
    {
        return $this->page;
    }

    public function setSearch(?string $search): static
    {
        $this->search = $search;
        return $this;
    }

    public function getSearch(): ?string
    {
        return $this->search;
    }

    public function setBefore(?string $before): static
    {
        $this->before = $before;
        return $this;
    }

    public function getBefore(): ?string
    {
        return $this->before;
    }

    public function setAfter(?string $after): static
    {
        $this->after = $after;
        return $this;
    }

    public function getAfter(): ?string
    {
        return $this->after;
    }

    public function toQuery(): string
    {
        return (new QueryParameterBuilder())
            ->addRequiredParameter('per_page', $this->getPerPage())
            ->addOptionalParameter('page', $this->getPage())
            ->addOptionalParameter('search', $this->getSearch())
            ->addOptionalParameter('before', $this->getBefore())
            ->addOptionalParameter('after', $this->getAfter())
            ->addSortQueryParameter('sort', $this->getColumn(), $this->getDirection())
            ->toQueryString();
    }
}
