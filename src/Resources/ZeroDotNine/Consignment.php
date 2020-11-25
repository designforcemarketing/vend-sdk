<?php

namespace SimpleSquid\Vend\Resources\ZeroDotNine;

use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Consignment.
 */
class Consignment extends DataTransferObject
{
    use CastsDates;

    /**
     * The ID of a transaction in an external system associated with this consignment.
     *
     * @var string|null
     */
    public $accounts_transaction_id;

    /**
     * The date when the consignment was created.
     *
     * @var \Carbon\Carbon|null
     */
    public $consignment_date;

    /**
     * The due date for the consignment.
     *
     * @var \Carbon\Carbon|null
     */
    public $due_at;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * The name of the consignment.
     *
     * @var string
     */
    public $name;

    /**
     * The ID of the outlet to which the goods are coming.
     *
     * @var string
     */
    public $outlet_id;

    /**
     * The date when the consignment was received.
     *
     * @var \Carbon\Carbon|null
     */
    public $received_at;

    /**
     * The ID of the retailer associated with this consignment.
     *
     * @var string|null
     */
    public $retailer_id;

    /**
     * The ID of the outlet from which the goods are coming. Only used for stock transfers.
     *
     * @var string|null
     */
    public $source_outlet_id;

    /**
     * Status of the consignment. One of: `OPEN`, `SENT`, `RECEIVED`, `CANCELLED`,  `STOCKTAKE`, `STOCKTAKE_COMPLETE`.
     *
     * @var string
     */
    public $status;

    /**
     * The ID of the supplier associated with this consignment.
     *
     * @var string|null
     */
    public $supplier_id;

    /**
     * The type of the consignment. One of:  `SUPPLIER`, `OUTLET`, `STOCKTAKE`.
     *
     * @var string
     */
    public $type;

    /**
     * **undocumented**.
     *
     * @var mixed|null
     */
    public $product_count;
}
