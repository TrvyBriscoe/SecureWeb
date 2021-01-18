<?php
/**
 * Created by PhpStorm.
 * User: slim
 * Date: 24/10/17
 * Time: 10:01
 */

namespace Secure;
use SoapFault;
use Secure\SWrapper;
class SecureCWModel
{
//    private $webservicefunction;
//    private $serviceparameters;
//    private $count;
//    private $deviceMsisdn;
//    private $countryCode;
//    private $xml_parser;
//    private $soap_wrapper;

    public function __construct()
    {
//        $this->webservicefunction = '';
//        $this->serviceparameters = '';
//        $this->username = '';
//        $this->password = '';
//        $this->count = '';
//        $this->deviceMsisdn = '';
//        $this->countryCode = '';
    }

    public function __destruct(){}
    public function downloadMessages(SWrapper $soap_wrapper_handle, array $messages){
        $result = null;
        $details = null;

        $webservicefunction = 'peekmessages';
        $serviceparameters=  [
            'username' => $m2macc = ['username'],
            'password' => $m2macc = ['password'],
            'count' => 100,
            'deviceMsisDn' => '',
            'countryCode' =>'',


        ];
    $soap_client = $soap_wrapper_handle->createSoapClient();
        try {

        }catch (SoapFault $obj_exception){
            trigger_error($obj_exception);
        }
        return $messages;
    }


    public function sendMessages(SWrapper $soap_wrapper_handle, array $m2macc){
        $soap_call_result = null;

        $webservicefunction = 'sendmessages';
        $cleaned_message_details ='';
        $service_parameters =  [
            $m2macc['username'],
            $m2macc['password'],
          $cleaned_message_details['number'],
            'deviceMsisDn' => '',
            'countryCode' =>'',


        ];
        $soap_client = $soap_wrapper_handle->createSoapClient();
        try {

        }catch (SoapFault $obj_exception){
            trigger_error($obj_exception);
        }
        return $m2macc;
    }
    public function setSoapWrapper($soap_wrapper)
    {
        $this->soap_wrapper = $soap_wrapper;
    }

    public function setParameters($cleaned_parameters)
    {
        $this->username = $cleaned_parameters['username'];
        $this->password = $cleaned_parameters['password'];
        $this->count = $cleaned_parameters['count'];
        $this->deviceMsisdn = $cleaned_parameters['deviceMsisdn'];
        $this->countryCode = $cleaned_parameters['countryCode'];
    }

    public function getResult()
    {
        return $this->result;
    }


}