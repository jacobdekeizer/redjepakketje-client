<?php

namespace JacobDeKeizer\RedJePakketje\Contracts;

interface HasLabelFormat
{
    public const LABEL_TYPE_PDF = 'pdf';
    public const LABEL_TYPE_PNG = 'png';
    public const LABEL_TYPE_ZPL = 'zpl';

    public const LABEL_SIZE_A6 = 'a6';
    public const LABEL_SIZE_A7 = 'a7';
}
