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
 * Create Security Group  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of Amazon EC2
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new Amazon_EC2_Client(AWS_ACCESS_KEY_ID, 
                                       AWS_SECRET_ACCESS_KEY);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates Amazon_EC2
 * responses without calling Amazon_EC2 service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under Amazon/EC2/Mock tree
 *
 ***********************************************************************/
 // $service = new Amazon_EC2_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Create Security Group Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_EC2_Model_CreateSecurityGroupRequest
 // object or array of parameters
 // invokeCreateSecurityGroup($service, $request);

                                                        
/**
  * Create Security Group Action Sample
  * The CreateSecurityGroup operation creates a new security group.
  * Every instance is launched in a security group. If no security group is
  * specified during launch, the instances are launched in the default security
  * group. Instances within the same security group have unrestricted network
  * access to each other. Instances will reject network access attempts from other
  * instances in a different security group. As the owner of instances you can
  * grant or revoke specific permissions using the AuthorizeSecurityGroupIngress
  * and RevokeSecurityGroupIngress operations.
  *   
  * @param Amazon_EC2_Interface $service instance of Amazon_EC2_Interface
  * @param mixed $request Amazon_EC2_Model_CreateSecurityGroup or array of parameters
  */
  function invokeCreateSecurityGroup(Amazon_EC2_Interface $service, $request) 
  {
      try {
              $response = $service->createSecurityGroup($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        CreateSecurityGroupResponse\n");
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 

     } catch (Amazon_EC2_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
                                                                                                                        