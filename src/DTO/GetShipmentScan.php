<?php
namespace Kerogos\DhlPolska\DTO;

class GetShipmentScan extends BaseDTO
{
    /**
     * @var AuthData|null $authData
     */
    public $authData;

    /**
     * @var string|null $shipmentId
     */
    public $shipmentId;
}
