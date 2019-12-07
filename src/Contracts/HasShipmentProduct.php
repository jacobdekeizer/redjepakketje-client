<?php

namespace JacobDeKeizer\RedJePakketje\Contracts;

interface HasShipmentProduct
{
    public const PRODUCT_SAME_DAY_PARCEL_STANDARD = 'sameday_parcel_standard';
    public const PRODUCT_SAME_DAY_PARCEL_MEDIUM = 'sameday_parcel_medium';
    public const PRODUCT_SAME_DAY_PARCEL_LARGE = 'sameday_parcel_large';
    public const PRODUCT_SAME_DAY_MAILBOX = 'sameday_mailbox';
}