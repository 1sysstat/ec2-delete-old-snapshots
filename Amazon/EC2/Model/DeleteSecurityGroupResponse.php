<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_EC2
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2008-12-01
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon EC2 PHP5 Library
 *  Generated: Wed Dec 24 22:54:04 PST 2008
 * 
 */

/**
 *  @see Amazon_EC2_Model
 */
require_once ('Amazon/EC2/Model.php');  

    

/**
 * Amazon_EC2_Model_DeleteSecurityGroupResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class Amazon_EC2_Model_DeleteSecurityGroupResponse extends Amazon_EC2_Model
{


    /**
     * Construct new Amazon_EC2_Model_DeleteSecurityGroupResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ResponseMetadata: Amazon_EC2_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Amazon_EC2_Model_ResponseMetadata'),
        );
        parent::__construct($data);
    }

       
    /**
     * Construct Amazon_EC2_Model_DeleteSecurityGroupResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return Amazon_EC2_Model_DeleteSecurityGroupResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://ec2.amazonaws.com/doc/2008-12-01/');
        $response = $xpath->query('//a:DeleteSecurityGroupResponse');
        if ($response->length == 1) {
            return new Amazon_EC2_Model_DeleteSecurityGroupResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct Amazon_EC2_Model_DeleteSecurityGroupResponse from provided XML. 
                                  Make sure that DeleteSecurityGroupResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the ResponseMetadata.
     * 
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata() 
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Sets the value of the ResponseMetadata.
     * 
     * @param ResponseMetadata ResponseMetadata
     * @return void
     */
    public function setResponseMetadata($value) 
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ResponseMetadata  and returns this instance
     * 
     * @param ResponseMetadata $value ResponseMetadata
     * @return Amazon_EC2_Model_DeleteSecurityGroupResponse instance
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }


    /**
     * Checks if ResponseMetadata  is set
     * 
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<DeleteSecurityGroupResponse xmlns=\"http://ec2.amazonaws.com/doc/2008-12-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</DeleteSecurityGroupResponse>";
        return $xml;
    }

}