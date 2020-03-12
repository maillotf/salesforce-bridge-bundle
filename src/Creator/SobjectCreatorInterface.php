<?php

namespace MaillotF\Salesforce\SalesforceBridgeBundle\Creator;

use MaillotF\Salesforce\SalesforceBridgeBundle\Sobject\SobjectInterface;

/**
 * Interface SobjectCreatorInterface
 * @package MaillotF\Salesforce\SalesforceBridgeBundle\Creator
 */
interface SobjectCreatorInterface
{
    /**
     * @param $name
     * @param $data
     * @return SobjectInterface
     */
    public function create($name, $data);
}