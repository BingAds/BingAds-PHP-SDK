<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/AdInsightExampleHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V12\AuthHelper;
use Microsoft\BingAds\Samples\V12\AdInsightExampleHelper;
use Microsoft\BingAds\Samples\V12\CampaignManagementExampleHelper;

// Specify the Microsoft\BingAds\V12\CampaignManagement classes that will be used.
use Microsoft\BingAds\V12\CampaignManagement\CampaignType;
use Microsoft\BingAds\V12\CampaignManagement\CampaignAdditionalField;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['AdInsightProxy'] = null; 
$GLOBALS['CampaignManagementProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // Authenticate for Bing Ads services with a Microsoft Account.
    
    AuthHelper::Authenticate();

    $GLOBALS['AdInsightProxy'] = new ServiceClient(
		ServiceClientType::AdInsightVersion12, 
		$GLOBALS['AuthorizationData'], 
		AuthHelper::GetApiEnvironment());

    $GLOBALS['CampaignManagementProxy'] = new ServiceClient(
		ServiceClientType::CampaignManagementVersion12, 
		$GLOBALS['AuthorizationData'], 
		AuthHelper::GetApiEnvironment());

    $getCampaignsByAccountIdResponse = CampaignManagementExampleHelper::GetCampaignsByAccountId(
    	$GLOBALS['AuthorizationData']->AccountId,
        AuthHelper::CampaignTypes,
        CampaignAdditionalField::ExperimentId
    );

    if(isset($getCampaignsByAccountIdResponse->Campaigns))
    {
        foreach ($getCampaignsByAccountIdResponse->Campaigns->Campaign as $campaign)
        {
            $opportunities = AdInsightExampleHelper::GetBudgetOpportunities($campaign->Id)->Opportunities;
            AdInsightExampleHelper::OutputArrayOfBudgetOpportunity($opportunities, $campaign->Id);
        }
    }
}
catch (SoapFault $e)
{
	print "\nLast SOAP request/response:\n";
    printf("Fault Code: %s\nFault String: %s\n", $e->faultcode, $e->faultstring);
	print $GLOBALS['Proxy']->GetWsdl() . "\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
	print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";
	
    if (isset($e->detail->AdApiFaultDetail))
    {
        AdInsightExampleHelper::OutputAdApiFaultDetail($e->detail->AdApiFaultDetail);
        
	}
	elseif (isset($e->detail->ApiFaultDetail))
    {
        AdInsightExampleHelper::OutputApiFaultDetail($e->detail->ApiFaultDetail);
    }
}
catch (Exception $e)
{
    // Ignore fault exceptions that we already caught.
    if ($e->getPrevious())
    { ; }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}
