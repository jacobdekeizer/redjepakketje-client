<?php

namespace JacobDeKeizer\RedJePakketje\Parameters\Shipments;

use JacobDeKeizer\RedJePakketje\Contracts\Dto;
use JacobDeKeizer\RedJePakketje\Contracts\Parameter;
use JacobDeKeizer\RedJePakketje\QueryParameters\QueryParameterBuilder;
use JacobDeKeizer\RedJePakketje\Traits\FromArray;

class All implements Dto, Parameter
{
    use FromArray;

    /**
     * @var int Number of shipments returned per page (max. 1000)
     */
    private $perPage;

    /**
     * @var string|null
     */
    private $column;

    /**
     * @var string|null
     */
    private $direction;

    /**
     * @var string|null
     */
    private $page;

    /**
     * @var string|null
     */
    private $search;

    /**
     * @var string|null
     */
    private $before;

    /**
     * @var string|null
     */
    private $after;

    public function __construct()
    {
        $this->perPage = 100;
    }

    /**
     * @param int $perPage
     * @return All
     */
    public function setPerPage(int $perPage): All
    {
        $this->perPage = $perPage;
        return $this;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * @param null|string $column
     * @return All
     */
    public function setColumn(?string $column): All
    {
        $this->column = $column;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getColumn(): ?string
    {
        return $this->column;
    }

    /**
     * @param null|string $direction
     * @return All
     */
    public function setDirection(?string $direction): All
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDirection(): ?string
    {
        return $this->direction;
    }

    /**
     * @param null|string $page
     * @return All
     */
    public function setPage(?string $page): All
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPage(): ?string
    {
        return $this->page;
    }

    /**
     * @param null|string $search
     * @return All
     */
    public function setSearch(?string $search): All
    {
        $this->search = $search;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSearch(): ?string
    {
        return $this->search;
    }

    /**
     * @param null|string $before
     * @return All
     */
    public function setBefore(?string $before): All
    {
        $this->before = $before;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getBefore(): ?string
    {
        return $this->before;
    }

    /**
     * @param null|string $after
     * @return All
     */
    public function setAfter(?string $after): All
    {
        $this->after = $after;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAfter(): ?string
    {
        return $this->after;
    }

    /**
     * {@inheritdoc}
     */
    public function toQuery(): string
    {
        return (new QueryParameterBuilder)
            ->addRequiredParameter('per_page', $this->getPerPage())
            ->addOptionalParameter('page', $this->getPage())
            ->addOptionalParameter('search', $this->getSearch())
            ->addOptionalParameter('before', $this->getBefore())
            ->addOptionalParameter('after', $this->getAfter())
            ->addSortQueryParameter('sort', $this->getColumn(), $this->getDirection())
            ->toQueryString();
    }
}