<?php

namespace Microsoft\BingAds\Auth;


use Microsoft\BingAds\V13\AdInsight\AdInsightServiceSettings as AdInsightServiceSettingsVersion13;
use Microsoft\BingAds\V13\Bulk\BulkServiceSettings as BulkServiceSettingsVersion13;
use Microsoft\BingAds\V13\CampaignManagement\CampaignManagementServiceSettings as CampaignManagementServiceSettingsVersion13;
use Microsoft\BingAds\V13\CustomerBilling\CustomerBillingServiceSettings as CustomerBillingServiceSettingsVersion13;
use Microsoft\BingAds\V13\CustomerManagement\CustomerManagementServiceSettings as CustomerManagementServiceSettingsVersion13;
use Microsoft\BingAds\V13\Reporting\ReportingServiceSettings as ReportingServiceSettingsVersion13;

use \DOMDocument;
use \DOMXPath;
use \SoapHeader;
use \SoapClient;
use \Exception;
 
/** 
 * Define the proxy class for the provided Bing Ads service.
 */
class ServiceClient
{
	private $authenticationToken;
	private $username;
    private $password;
	private $developerToken;
	private $wsdlUrl;
	private $accountId;
	private $customerId;
	private $service;
	private $namespace;
	private $apiEnvironment;
	private $options;

	private $sandboxServiceClientEndpoints = array(
		ServiceClientType::AdInsightVersion13 => AdInsightServiceSettingsVersion13::SandboxEndpoint,
		ServiceClientType::BulkVersion13 => BulkServiceSettingsVersion13::SandboxEndpoint,
		ServiceClientType::CampaignManagementVersion13 => CampaignManagementServiceSettingsVersion13::SandboxEndpoint,
		ServiceClientType::CustomerBillingVersion13 => CustomerBillingServiceSettingsVersion13::SandboxEndpoint,
		ServiceClientType::CustomerManagementVersion13 => CustomerManagementServiceSettingsVersion13::SandboxEndpoint,
		ServiceClientType::ReportingVersion13 => ReportingServiceSettingsVersion13::SandboxEndpoint
	);

	private $productionServiceClientEndpoints = array(
		ServiceClientType::AdInsightVersion13 => AdInsightServiceSettingsVersion13::ProductionEndpoint,
		ServiceClientType::BulkVersion13 => BulkServiceSettingsVersion13::ProductionEndpoint,
		ServiceClientType::CampaignManagementVersion13 => CampaignManagementServiceSettingsVersion13::ProductionEndpoint,
		ServiceClientType::CustomerBillingVersion13 => CustomerBillingServiceSettingsVersion13::ProductionEndpoint,
		ServiceClientType::CustomerManagementVersion13 => CustomerManagementServiceSettingsVersion13::ProductionEndpoint,
		ServiceClientType::ReportingVersion13 => ReportingServiceSettingsVersion13::ProductionEndpoint
	);

	private $serviceClientNamespaces = array(
		ServiceClientType::AdInsightVersion13 => AdInsightServiceSettingsVersion13::ServiceNamespace,
		ServiceClientType::BulkVersion13 => BulkServiceSettingsVersion13::ServiceNamespace,
		ServiceClientType::CampaignManagementVersion13 => CampaignManagementServiceSettingsVersion13::ServiceNamespace,
		ServiceClientType::CustomerBillingVersion13 => CustomerBillingServiceSettingsVersion13::ServiceNamespace,
		ServiceClientType::CustomerManagementVersion13 => CustomerManagementServiceSettingsVersion13::ServiceNamespace,
		ServiceClientType::ReportingVersion13 => ReportingServiceSettingsVersion13::ServiceNamespace
	);
	
	/** 
     * Converts long types found in SOAP responses to string types in PHP.
	 * 
	 * @param string $xmlFragmentString
	 * 
	 * @return string
     */  
	private function from_long_xml($xmlFragmentString)
	{
		return (string)strip_tags($xmlFragmentString);
	}
	
	/** 
     * Converts PHP string types to long types in SOAP requests.
	 * 
	 * @param string $longVal
	 * 
	 * @return string
     */ 
	private function to_long_xml($longVal)
	{
		return '<long>' . $longVal . '</long>';
	}

	public function __construct($serviceClientType, $authorizationData, $apiEnvironment, $options = array())
	{
		// The sandbox environment is used unless the Production environment is explicitly set.
        
		if($apiEnvironment === ApiEnvironment::Production and array_key_exists($serviceClientType, $this->productionServiceClientEndpoints))
		{
			$this->wsdlUrl = $this->productionServiceClientEndpoints[$serviceClientType] . "?singleWsdl";
		}
		else if (array_key_exists($serviceClientType, $this->sandboxServiceClientEndpoints)) 
		{
            $this->wsdlUrl = $this->sandboxServiceClientEndpoints[$serviceClientType] . "?singleWsdl";
		}
		else 
        {
            throw new Exception(sprintf("%s is not a valid service client type.", $serviceClientType));
        }
 
        $this->apiEnvironment = $apiEnvironment;
		$this->namespace = $this->serviceClientNamespaces[$serviceClientType];
		$this->options = $options;

		$this->SetAuthorizationData($authorizationData);
		
		return $this;
	}

	public function GetAccountId() { return $this->accountId; }
	public function GetCustomerId() { return $this->customerId; }
	public function GetService() { return $this->service; }
	public function GetNamespace() { return $this->namespace; }
	public function GetWsdl() { return $this->wsdlUrl; }
	public function GetApiEnvironment() { return $this->apiEnvironment; }

    /** 
     * This function gets the namespace from the WSDL, so you do
	 * not have to hardcode it in the client.
	 * 
	 * @param string $url
	 * 
	 * @return string
     */ 
	private function GetServiceNamespace($url)
	{
		$doc = new DOMDocument;
		$doc->Load($url);

		$xpath = new DOMXPath($doc);
		$query = "/*/@targetNamespace";

		$attrs = $xpath->query($query);

        /** 
         * The query will return only one node in the node list.
         */ 
		foreach($attrs as $attr)
		{
			$namespace = $attr->value;
		}

		return $namespace;
	}

    /** 
     * Set the authentication headers that should be used in calls to the Bing Ads web services. 
	 * 
	 * @param AuthorizationData $authorizationData
	 * 
	 * @throws Exception
     */ 
	public function SetAuthorizationData($authorizationData) {
		if(!isset($authorizationData))
		{
			throw new Exception("AuthorizationData is not set.");
		}
		
		if(isset($authorizationData->Authentication) && isset($authorizationData->Authentication->Type))
		{
			if($authorizationData->Authentication->Type == "PasswordAuthentication")
			{
				$this->username = $authorizationData->Authentication->UserName;
				$this->password = $authorizationData->Authentication->Password;
			}
			elseif($authorizationData->Authentication->Type == "OAuthWebAuthCodeGrant" ||
				   $authorizationData->Authentication->Type == "OAuthDesktopMobileAuthCodeGrant" ||
				   $authorizationData->Authentication->Type == "OAuthDesktopMobileImplicitGrant") 
			{
				if(isset($authorizationData->Authentication->OAuthTokens)){
					$this->authenticationToken = $authorizationData->Authentication->OAuthTokens->AccessToken;
				}
			}
		}
		else
		{
			throw new Exception("Invalid Authentication Type.");
		}
		

		$this->developerToken = $authorizationData->DeveloperToken;
        $this->accountId = $authorizationData->AccountId;
		$this->customerId = $authorizationData->CustomerId;

		$this->RefreshServiceProxy();
	}

	private function RefreshServiceProxy()
	{
        /** 
         * Define the SOAP headers. 
         */ 
		$headers = array();

		$headers[] = new SoapHeader(
			$this->namespace,
			'CustomerAccountId',
			$this->accountId
		);

		$headers[] = new SoapHeader(
			$this->namespace,
			'CustomerId',
			$this->customerId
		);

		$headers[] = new SoapHeader(
			$this->namespace,
			'DeveloperToken',
			$this->developerToken
		);

		$headers[] = new SoapHeader(
			$this->namespace,
			'UserName',
			$this->username
		);

		$headers[] = new SoapHeader(
			$this->namespace,
			'Password',
			$this->password
		);

		$headers[] = new SoapHeader(
			$this->namespace,
			'AuthenticationToken',
			$this->authenticationToken
		);

        /** 
         * By default, PHP does not return single item arrays as an array type.
		 * To force PHP to always return an array for an array type in the
		 * response, specify the SOAP_SINGLE_ELEMENT_ARRAYS feature.
         */ 
		$default_options = array(
			'trace' => TRUE,
			'exceptions' => TRUE,
			'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
			// Disable keep_alive to avoid 'Process open FD table is full'
			'keep_alive' => FALSE, 
			'user_agent' => 'BingAdsSDKPHP ' . '13.0.18 ' . PHP_VERSION, 
			'cache_wsdl' => 'WSDL_CACHE_NONE',

			/** 
			 * Map long type to string type. For details, see
			 * from_long_xml and to_long_xml callbacks.
			 */ 
			'typemap' => array(
				array(
						'type_ns' => 'http://www.w3.org/2001/XMLSchema',
						'type_name' => 'xs:long',
						'to_xml' => 'to_long_xml',
						'from_xml' => 'from_long_xml'
				),
			)
		);

		$mergedOptions = array_merge($default_options, $this->options);

		$proxy = @new SOAPClient($this->wsdlUrl, $mergedOptions);

		$proxy->__setSoapHeaders($headers);

		$this->service = $proxy;
	}
}
