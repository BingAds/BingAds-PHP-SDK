<?php

namespace Microsoft\BingAds\Auth;

use Microsoft\BingAds\V10\AdInsight\AdInsightServiceSettings;
use Microsoft\BingAds\V10\Bulk\BulkServiceSettings;
use Microsoft\BingAds\V10\CampaignManagement\CampaignManagementServiceSettings;
use Microsoft\BingAds\V9\CustomerBilling\CustomerBillingServiceSettings;
use Microsoft\BingAds\V9\CustomerManagement\CustomerManagementServiceSettings;
use Microsoft\BingAds\V9\Reporting\ReportingServiceSettings;

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

	private $sandboxServiceClientEndpoints = array(
		ServiceClientType::AdInsightVersion10 => AdInsightServiceSettings::SandboxEndpoint,
		ServiceClientType::BulkVersion10 => BulkServiceSettings::SandboxEndpoint,
		ServiceClientType::CampaignManagementVersion10 => CampaignManagementServiceSettings::SandboxEndpoint,
		ServiceClientType::CustomerManagementVersion9 => CustomerManagementServiceSettings::SandboxEndpoint,
		ServiceClientType::ReportingVersion9 => ReportingServiceSettings::SandboxEndpoint,
	);

	private $productionServiceClientEndpoints = array(
		ServiceClientType::AdInsightVersion10 => AdInsightServiceSettings::ProductionEndpoint,
		ServiceClientType::BulkVersion10 => BulkServiceSettings::ProductionEndpoint,
		ServiceClientType::CampaignManagementVersion10 => CampaignManagementServiceSettings::ProductionEndpoint,
		ServiceClientType::CustomerBillingVersion9 => CustomerBillingServiceSettings::ProductionEndpoint,
		ServiceClientType::CustomerManagementVersion9 => CustomerManagementServiceSettings::ProductionEndpoint,
		ServiceClientType::ReportingVersion9 => ReportingServiceSettings::ProductionEndpoint,
	);

	private $serviceClientNamespaces = array(
		ServiceClientType::AdInsightVersion10 => AdInsightServiceSettings::ServiceNamespace,
		ServiceClientType::BulkVersion10 => BulkServiceSettings::ServiceNamespace,
		ServiceClientType::CampaignManagementVersion10 => CampaignManagementServiceSettings::ServiceNamespace,
		ServiceClientType::CustomerBillingVersion9 => CustomerBillingServiceSettings::ServiceNamespace,
		ServiceClientType::CustomerManagementVersion9 => CustomerManagementServiceSettings::ServiceNamespace,
		ServiceClientType::ReportingVersion9 => ReportingServiceSettings::ServiceNamespace,
	);
	
	/** 
     * Converts long types found in SOAP responses to string types in PHP.
     */  
	private function from_long_xml($xmlFragmentString)
	{
		return (string)strip_tags($xmlFragmentString);
	}
	
	/** 
     * Converts PHP string types to long types in SOAP requests.
     */ 
	private function to_long_xml($longVal)
	{
		return '<long>' . $longVal . '</long>';
	}

	public function __construct($serviceClientType, $authorizationData, $apiEnvironment)
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
				$this->authenticationToken = $authorizationData->Authentication->OAuthTokens->AccessToken;
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
		$options = array(
				'trace' => TRUE,
				'exceptions' => TRUE,
				'features' => SOAP_SINGLE_ELEMENT_ARRAYS,

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

		$proxy = @new SOAPClient($this->wsdlUrl, $options);

		$proxy->__setSoapHeaders($headers);

		$this->service = $proxy;
	}
}

?>