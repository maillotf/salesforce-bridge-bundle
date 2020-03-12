<?php

namespace MaillotF\Salesforce\SalesforceBridgeBundle\Service;


/**
 * Class QueryBuilder
 * @package MaillotF\Salesforce\SalesforceBridgeBundle\Service
 */
interface QueryBuilderInterface
{
    /**
     * @param $fields
     * @param $from
     * @param null $conditions
     * @return string
     */
    public function build($fields, $from, $conditions = null);
}