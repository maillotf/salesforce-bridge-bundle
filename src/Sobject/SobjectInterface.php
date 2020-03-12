<?php

namespace MaillotF\Salesforce\SalesforceBridgeBundle\Sobject;

/**
 * Interface SobjectInterface
 * @package MaillotF\Salesforce\SalesforceBridgeBundle\Sobject
 */
interface SobjectInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * id setter
     * @param string $id
     */
    public function setId($id);

    /**
     * @return mixed
     */
    public function getContent();

    /**
     * content setter
     * @param mixed $content
     */
    public function setContent($content);

    /**
     * @return string
     */
    public function getName();

    /**
     * name of resource setter
     * @param string $name
     */
    public function setName($name);
}
