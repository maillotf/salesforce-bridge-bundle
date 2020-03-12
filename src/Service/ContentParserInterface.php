<?php

namespace MaillotF\Salesforce\SalesforceBridgeBundle\Service;

use MaillotF\Salesforce\SalesforceBridgeBundle\Sobject\SobjectInterface;

/**
 * Interface ContentParserInterface
 * @package MaillotF\Salesforce\SalesforceBridgeBundle\Service
 */
interface ContentParserInterface
{
    /**
     * @param SobjectInterface $sObject
     * @return array
     */
    public function getContent(SobjectInterface $sObject);
}
