<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Shipment\Enums;

interface LabelFormat
{
    public const TYPE_PDF = 'pdf';
    public const TYPE_PNG = 'png';
    public const TYPE_ZPL = 'zpl';

    public const SIZE_A6 = 'a6';
    public const SIZE_A7 = 'a7';
}
