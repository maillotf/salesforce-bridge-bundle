<?php

namespace MaillotF\Salesforce\SalesforceBridgeBundle\Creator;

use MaillotF\Salesforce\SalesforceBridgeBundle\Service\ContentParser;
use MaillotF\Salesforce\SalesforceBridgeBundle\Sobject\Sobject;

/**
 * Class SobjectCreator
 * @package MaillotF\Salesforce\SalesforceBridgeBundle\Creator
 */
class SobjectCreator implements SobjectCreatorInterface
{
    /**
     * @param $name
     * @param $data
     * @return mixed
     */
    public function create($name, $data)
    {
        $sobject = new Sobject();
        $sobject->setName($name);
        if ($data) {
            $sobject->setContent(ContentParser::parseToArray($data));
        }
        if ($sobject->getContent() && isset($sobject->getContent()['Id'])) {
            $sobject->setId($sobject->getContent()['Id']);
        }
        return $sobject;
    }
}