<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

require_once __DIR__ . "/CustomerManagementExampleHelper.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\CampaignManagement classes that will be used.
use Microsoft\BingAds\V12\CampaignManagement\GetCampaignsByAccountIdRequest;
use Microsoft\BingAds\V12\CampaignManagement\Campaign;
use Microsoft\BingAds\V12\CampaignManagement\CampaignType;
use Microsoft\BingAds\V12\CampaignManagement\CampaignAdditionalField;

// Specify the Microsoft\BingAds\V12\CustomerManagement classes that will be used.
use Microsoft\BingAds\V12\CustomerManagement\Paging;
use Microsoft\BingAds\V12\CustomerManagement\Predicate;
use Microsoft\BingAds\V12\CustomerManagement\PredicateOperator;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V12\AuthHelper;
use Microsoft\BingAds\Samples\V12\CampaignManagementExampleHelper;
use Microsoft\BingAds\Samples\V12\CustomerManagementExampleHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerManagementProxy'] = null; 
$GLOBALS['CampaignManagementProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // Authenticate for Bing Ads services with a Microsoft Account.
    
    AuthHelper::Authenticate();

    $GLOBALS['CustomerManagementProxy'] = new ServiceClient(
        ServiceClientType::CustomerManagementVersion12, 
        $GLOBALS['AuthorizationData'], 
        AuthHelper::GetApiEnvironment());

    $GLOBALS['CampaignManagementProxy'] = new ServiceClient(
        ServiceClientType::CampaignManagementVersion12, 
        $GLOBALS['AuthorizationData'], 
        AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $user = CustomerManagementExampleHelper::GetUser(null, true)->User;

    // Search for the Bing Ads accounts that the user can access.

    $pageInfo = new Paging();
    $pageInfo->Index = 0;    // The first page
    $pageInfo->Size = 100;   // The first 100 accounts for this page of results    

    $predicate = new Predicate();
    $predicate->Field = "UserId";
    $predicate->Operator = PredicateOperator::Equals;
    $predicate->Value = $user->Id; 

    $accounts = CustomerManagementExampleHelper::SearchAccounts(
        array($predicate),
        null,
        $pageInfo)->Accounts;

    foreach ($accounts->AdvertiserAccount as $account)
    {
        $GLOBALS['AuthorizationData']->AccountId = $account->Id;
        $GLOBALS['AuthorizationData']->CustomerId = $account->ParentCustomerId;

        CustomerManagementExampleHelper::OutputAdvertiserAccount($account);

        // Optionally you can find out which pilot features the customer is able to use. 
        // Each account could belong to a different customer, so use the customer ID in each account.
        $featurePilotFlags = CustomerManagementExampleHelper::GetCustomerPilotFeatures($account->ParentCustomerId)->FeaturePilotFlags;
        print "Customer Pilot Flags:\n";
        CustomerManagementExampleHelper::OutputArrayOfInt($featurePilotFlags);
        $getCampaignsByAccountIdResponse = CampaignManagementExampleHelper::GetCampaignsByAccountId(
            $account->Id, 
            AuthHelper::CampaignTypes,
            CampaignAdditionalField::ExperimentId
        );
        CampaignManagementExampleHelper::OutputArrayOfCampaign($getCampaignsByAccountIdResponse->Campaigns);
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
        CustomerManagementExampleHelper::OutputAdApiFaultDetail($e->detail->AdApiFaultDetail);
        
    }
    elseif (isset($e->detail->ApiFault))
    {
        CustomerManagementExampleHelper::OutputApiFault($e->detail->ApiFault);
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
