<?php

namespace MaillotF\Salesforce\SalesforceBridgeBundle\Sobject;

/**
 * Class Sobject
 * @package MaillotF\Salesforce\SalesforceBridgeBundle\Sobject
 */
class Sobject implements SobjectInterface
{
    /** @var  string */
    protected $name;

    /** @var  string */
    protected $id;

    /** @var  mixed */
    protected $content;

    /**
	 * 
	 * @param string $id
	 * @return \MaillotF\Salesforce\SalesforceBridgeBundle\Sobject\Sobject
	 */
    public function setId(string $id): Sobject
    {
        $this->id = $id;
		return ($this);
    }
	
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
	
    /**
	 * 
	 * @param type $content
	 * @return \MaillotF\Salesforce\SalesforceBridgeBundle\Sobject\Sobject
	 */
    public function setContent($content): Sobject
    {
        $this->content = $content;
		return ($this);
    }
	
    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
	 * 
	 * @param string $name
	 * @return \MaillotF\Salesforce\SalesforceBridgeBundle\Sobject\Sobject
	 */
    public function setName(string $name): Sobject
    {
        $this->name = $name;
		return ($this);
    }
	
    /**
	 * 
	 * @return string
	 */
    public function getName(): string
    {
        return $this->name;
    }
}