<?php

namespace Collector;

/**
 * Class Invoice
 * @package Collector
 */
abstract class Invoice
{
    const STATUS_ON_HOLD = 0;
    const STATUS_PENDING = 1;
    const STATUS_ACTIVATED = 2;
    const STATUS_REJECTED = 5;
    const STATUS_SIGNING = 6;

    static public $statuses = [
        self::STATUS_ON_HOLD => 'On hold',
        self::STATUS_PENDING => 'Pending',
        self::STATUS_ACTIVATED => 'Activated',
        self::STATUS_REJECTED => 'Rejected',
        self::STATUS_SIGNING => 'Signing',
    ];

    const TYPE_DIRECT = 0;
    const TYPE_MONTHLY = 1;
    const TYPE_AGGREGATED = 3;
    const TYPE_INTEREST_FREE = 4;
    const TYPE_ANNUITY = 5;

    static public $types = [
        self::TYPE_DIRECT => 'Invoice will be in the package and/or directly sent with e-mail if InvoiceDeliveryMethod is set to 1 (normal mail), Collector will not send this invoice to the customer, you will send it as part of the package.',
        self::TYPE_MONTHLY => 'Monthly invoice. Collector will send this invoice.',
        self::TYPE_AGGREGATED => 'Aggregated invoice. Collector will send the invoice. All invoices incoming during the same month with this flag will be aggregated to one invoice.',
        self::TYPE_INTEREST_FREE => 'Interest Free Invoice. Collector will send this invoice.',
        self::TYPE_ANNUITY => 'Annuity invoice. Collector will send this invoice.',
    ];

    const ACTIVATION_MANUAL = 0;
    const ACTIVATION_AUTO = 1;
    const ACTIVATION_PRE_PAID = 2;

    static public $activation = [
        self::ACTIVATION_MANUAL => 'Purchase will be preliminary and must be activated, by using the ActivateInvoice, PartActivateInvoice or through the Collector Partner Portal.',
        self::ACTIVATION_AUTO => 'Auto activation, will automatically active the invoice so it can be sent out directly. This can only be used when the order can be delivered directly.',
        self::ACTIVATION_PRE_PAID => 'Pre-Paid invoice. The purchase will be activated first when an invoice is paid. Not used at the moment.',
    ];
}
