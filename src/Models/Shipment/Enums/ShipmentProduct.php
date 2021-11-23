<?php

declare(strict_types=1);

namespace JacobDeKeizer\RedJePakketje\Models\Shipment\Enums;

interface ShipmentProduct
{
    public const SAME_DAY_PARCEL_STANDARD = 'sameday_parcel_standard';
    public const SAME_DAY_PARCEL_MEDIUM = 'sameday_parcel_medium';
    public const SAME_DAY_PARCEL_LARGE = 'sameday_parcel_large';
    public const SAME_DAY_MAILBOX = 'sameday_mailbox';

    public const NEXT_DAY_PARCEL_STANDARD = 'nextday_parcel_standard';
    public const NEXT_DAY_PARCEL_MEDIUM = 'nextday_parcel_medium';
    public const NEXT_DAY_PARCEL_LARGE = 'nextday_parcel_large';
    public const NEXT_DAY_MAILBOX = 'nextday_mailbox';
}
