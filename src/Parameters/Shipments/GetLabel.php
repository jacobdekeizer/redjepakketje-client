<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Parameters\Shipments;

use JacobDeKeizer\RedJePakketje\Models\Shipment\Enums\LabelFormat;
use JacobDeKeizer\RedJePakketje\Parameters\BaseParameter;
use JacobDeKeizer\RedJePakketje\QueryParameters\QueryParameterBuilder;

class GetLabel extends BaseParameter
{
    private string $format = LabelFormat::TYPE_PDF;

    private string $pageSize = LabelFormat::SIZE_A6;

    private ?int $offsetX = null;

    private ?int $offsetY = null;

    private ?int $dpi = null;

    private ?bool $embedded = null;

    private ?bool $inverted = null;

    public function setFormat(string $format): static
    {
        $this->format = $format;
        return $this;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function setPageSize(string $pageSize): static
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function getPageSize(): string
    {
        return $this->pageSize;
    }

    public function setOffsetX(?int $offsetX): static
    {
        $this->offsetX = $offsetX;
        return $this;
    }

    public function getOffsetX(): ?int
    {
        return $this->offsetX;
    }

    public function setOffsetY(?int $offsetY): static
    {
        $this->offsetY = $offsetY;
        return $this;
    }

    public function getOffsetY(): ?int
    {
        return $this->offsetY;
    }

    public function setDpi(?int $dpi): static
    {
        $this->dpi = $dpi;
        return $this;
    }

    public function getDpi(): ?int
    {
        return $this->dpi;
    }

    public function setEmbedded(?bool $embedded): static
    {
        $this->embedded = $embedded;
        return $this;
    }

    public function getEmbedded(): ?bool
    {
        return $this->embedded;
    }

    public function setInverted(?bool $inverted): static
    {
        $this->inverted = $inverted;
        return $this;
    }

    public function getInverted(): ?bool
    {
        return $this->inverted;
    }

    public function toQuery(): string
    {
        return (new QueryParameterBuilder())
            ->addRequiredParameter('format', $this->getFormat())
            ->addRequiredParameter('pagesize', $this->getPageSize())
            ->addOptionalParameter('offset_x', $this->getOffsetX())
            ->addOptionalParameter('offset_y', $this->getOffsetY())
            ->addOptionalParameter('dpi', $this->getDpi())
            ->addOptionalParameter('embedded', $this->getEmbedded())
            ->addOptionalParameter('inverted', $this->getInverted())
            ->toQueryString();
    }
}
