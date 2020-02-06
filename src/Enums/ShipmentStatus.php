<?php

namespace JacobDeKeizer\RedJePakketje\Enums;

class ShipmentStatus
{
    public const STATUS_PRE_TRANSIT = 'pre_transit';
    public const STATUS_READY_FOR_PICKUP = 'ready_for_pickup';
    public const STATUS_IN_TRANSIT = 'in_transit';
    public const STATUS_IN_DEPOT = 'in_depot';
    public const STATUS_OUT_FOR_DELIVERY = 'out_for_delivery';
    public const STATUS_DELIVERED = 'delivered';
    public const STATUS_FAILED_TO_DELIVER = 'failed_to_deliver';
    public const STATUS_RETURN_TO_SENDER = 'return_to_sender';
    public const STATUS_RETURNED_TO_SENDER_OUT_FOR_DELIVERY = 'returned_to_sender_out_for_delivery';
    public const STATUS_RETURNED_TO_SENDER = 'returned_to_sender';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_NOT_AVAILABLE = 'not_available';
}