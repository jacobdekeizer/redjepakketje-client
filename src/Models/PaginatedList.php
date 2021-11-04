<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models;

use JacobDeKeizer\RedJePakketje\Contracts\Model;

/**
 * @template T
 */
abstract class PaginatedList extends BaseModel
{
    private ?int $total;

    private ?int $perPage;

    private ?int $currentPage;

    private ?int $lastPage;

    private ?string $nextPageUrl;

    private ?string $prevPageUrl;

    private ?string $firstPageUrl;

    private ?string $lastPageUrl;

    private ?string $path;

    /**
     * @var Link[]
     */
    private array $links;

    private ?int $from;

    private ?int $to;

    /**
     * @var T[]
     */
    protected array $data = [];

    public function setTotal(?int $total): static
    {
        $this->total = $total;
        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setPerPage(?int $perPage): static
    {
        $this->perPage = $perPage;
        return $this;
    }

    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    public function setCurrentPage(?int $currentPage): static
    {
        $this->currentPage = $currentPage;
        return $this;
    }

    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    public function setLastPage(?int $lastPage): static
    {
        $this->lastPage = $lastPage;
        return $this;
    }

    public function getLastPage(): ?int
    {
        return $this->lastPage;
    }

    public function setNextPageUrl(?string $nextPageUrl): static
    {
        $this->nextPageUrl = $nextPageUrl;
        return $this;
    }

    public function getNextPageUrl(): ?string
    {
        return $this->nextPageUrl;
    }

    public function setPrevPageUrl(?string $prevPageUrl): static
    {
        $this->prevPageUrl = $prevPageUrl;
        return $this;
    }

    public function getPrevPageUrl(): ?string
    {
        return $this->prevPageUrl;
    }

    public function getFirstPageUrl(): ?string
    {
        return $this->firstPageUrl;
    }

    public function setFirstPageUrl(?string $firstPageUrl): static
    {
        $this->firstPageUrl = $firstPageUrl;
        return $this;
    }

    public function getLastPageUrl(): ?string
    {
        return $this->lastPageUrl;
    }

    public function setLastPageUrl(?string $lastPageUrl): static
    {
        $this->lastPageUrl = $lastPageUrl;
        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): static
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return Link[]
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    public function setLinks(Link ...$links): PaginatedList
    {
        $this->links = $links;
        return $this;
    }

    public function setFrom(?int $from): static
    {
        $this->from = $from;
        return $this;
    }

    public function getFrom(): ?int
    {
        return $this->from;
    }

    public function setTo(?int $to): static
    {
        $this->to = $to;
        return $this;
    }

    public function getTo(): ?int
    {
        return $this->to;
    }

    /**
     * @param T[] $data
     */
    public function setData(array $data): static
    {
        $this->data = [];

        foreach ($data as $item) {
            $this->data[] = $this->createDataResourceFromArray($item);
        }

        return $this;
    }

    /**
     * @return T[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    abstract protected function createDataResourceFromArray(array $data): Model;
}
