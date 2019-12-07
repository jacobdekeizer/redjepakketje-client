<?php

namespace jacobdekeizer\Resources;

use jacobdekeizer\Contracts\Dto;

abstract class BaseList implements Dto
{
    /**
     * @var int|null
     */
    private $total;

    /**
     * @var int|null
     */
    private $perPage;

    /**
     * @var int|null
     */
    private $currentPage;

    /**
     * @var int|null
     */
    private $lastPage;

    /**
     * @var string|null
     */
    private $nextPageUrl;

    /**
     * @var string|null
     */
    private $prevPageUrl;

    /**
     * @var int|null
     */
    private $from;

    /**
     * @var int|null
     */
    private $to;

    /**
     * @var array|null
     */
    protected $data;

    /**
     * @param int|null $total
     * @return BaseList
     */
    public function setTotal(?int $total): BaseList
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int|null $perPage
     * @return BaseList
     */
    public function setPerPage(?int $perPage): BaseList
    {
        $this->perPage = $perPage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    /**
     * @param int|null $currentPage
     * @return BaseList
     */
    public function setCurrentPage(?int $currentPage): BaseList
    {
        $this->currentPage = $currentPage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    /**
     * @param int|null $lastPage
     * @return BaseList
     */
    public function setLastPage(?int $lastPage): BaseList
    {
        $this->lastPage = $lastPage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLastPage(): ?int
    {
        return $this->lastPage;
    }

    /**
     * @param null|string $nextPageUrl
     * @return BaseList
     */
    public function setNextPageUrl(?string $nextPageUrl): BaseList
    {
        $this->nextPageUrl = $nextPageUrl;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getNextPageUrl(): ?string
    {
        return $this->nextPageUrl;
    }

    /**
     * @param null|string $prevPageUrl
     * @return BaseList
     */
    public function setPrevPageUrl(?string $prevPageUrl): BaseList
    {
        $this->prevPageUrl = $prevPageUrl;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPrevPageUrl(): ?string
    {
        return $this->prevPageUrl;
    }

    /**
     * @param int|null $from
     * @return BaseList
     */
    public function setFrom(?int $from): BaseList
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFrom(): ?int
    {
        return $this->from;
    }

    /**
     * @param int|null $to
     * @return BaseList
     */
    public function setTo(?int $to): BaseList
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTo(): ?int
    {
        return $this->to;
    }

    /**
     * @param array|null $data
     * @return BaseList
     */
    public function setData(?array $data): BaseList
    {
        $this->data = [];

        foreach ($data as $shipment) {
            $this->data[] = ReturnShipmentResponse::fromArray((array) $shipment);
        }

        return $this;
    }

    /**
     * @return array|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return Dto
     */
    abstract protected function createDataResourceFromArray(array $data): Dto;
}