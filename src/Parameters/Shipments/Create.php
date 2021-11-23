<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Parameters\Shipments;

use JacobDeKeizer\RedJePakketje\Models\Shipment\Enums\LabelFormat;
use JacobDeKeizer\RedJePakketje\Parameters\BaseParameter;
use JacobDeKeizer\RedJePakketje\QueryParameters\QueryParameterBuilder;

class Create extends BaseParameter
{
    private string $label = LabelFormat::TYPE_PDF;

    private string $pagesize = LabelFormat::SIZE_A6;

    private ?int $offsetX = null;

    private ?int $offsetY = null;

    private ?int $dpi = null;

    private ?bool $embedded = null;

    private ?bool $inverted = null;

    public function setLabel(string $label): static
    {
        $this->label = $label;
        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setPagesize(string $pagesize): static
    {
        $this->pagesize = $pagesize;
        return $this;
    }

    public function getPagesize(): string
    {
        return $this->pagesize;
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
            ->addRequiredParameter('label', $this->getLabel())
            ->addRequiredParameter('pagesize', $this->getPagesize())
            ->addOptionalParameter('offset_x', $this->getOffsetX())
            ->addOptionalParameter('offset_y', $this->getOffsetY())
            ->addOptionalParameter('dpi', $this->getDpi())
            ->addOptionalParameter('embedded', $this->getEmbedded())
            ->addOptionalParameter('inverted', $this->getInverted())
            ->toQueryString();
    }
}
