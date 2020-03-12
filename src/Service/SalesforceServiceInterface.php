<?php

namespace MaillotF\Salesforce\SalesforceBridgeBundle\Service;

use GenesisGlobal\Salesforce\Http\Response\Response;
use MaillotF\Salesforce\SalesforceBridgeBundle\Sobject\SobjectInterface;

/**
 * Interface SalesforceServiceInterface
 * @package MaillotF\Salesforce\SalesforceBridgeBundle\Service
 */
interface SalesforceServiceInterface
{
    /**
     * @param SobjectInterface $sObject
     * @return Response
     */
    public function create(SobjectInterface $sObject);

    /**
     * @param SobjectInterface $sObject
     * @param $externalIdName
     * @param $externalIdValue
     * @return Response
     */
    public function upsert(SobjectInterface $sObject, $externalIdName, $externalIdValue);

    /**
     * @param $sobjectName
     * @param $sObjectId
     * @param $fields
     * @return Response
     */
    public function update($sobjectName, $sObjectId, $fields);

    /**
     * @param $name
     * @param $id
     * @param fields
     * @return Response
     */
    public function getBySobjectId($name, $id, $fields);

    /**
     * @param $name
     * @param $externalIdName
     * @param $externalIdValue
     * @param $fields
     * @return Response
     */
    public function getByExternalId($name, $externalIdName, $externalIdValue, $fields);

    /**
     * @param $fields
     * @param $from
     * @param null $conditions should be array of conditions [field => value] which parse to where+field='value'
     * @return Response
     */
    public function query($fields, $from, $conditions = null);

    /**
     * @param $sobjectName
     * @return Response
     */
    public function getMetaDataForSobject($sobjectName);

    /**
     * @param $sobjectName
     * @param $fieldNames
     * @return array
     */
    public function getPickListForSobjectAndField($sobjectName, $fieldNames);
}