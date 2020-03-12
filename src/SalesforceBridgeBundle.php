<?php

namespace MaillotF\Salesforce\SalesforceBridgeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

use MaillotF\Salesforce\SalesforceBridgeBundle\DependencyInjection\SalesforceExtension;

/**
 * Class SalesforceBridgeBundle
 * 
 * @package MaillotF\Salesforce\SalesforceBridgeBundle
 * @author Flavien Maillot "contact@webcomputing.fr"
 */
class SalesforceBridgeBundle extends Bundle
{
	public function getContainerExtension()
    {
        return new SalesforceExtension();
    }
}
