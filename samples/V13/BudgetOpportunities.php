<?php

namespace Microsoft\BingAds\Samples\V13;

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
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\AdInsightExampleHelper;
use Microsoft\BingAds\Samples\V13\CampaignManagementExampleHelper;

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    print("-----\r\nGetCampaignsByAccountId:\r\n");
    $getCampaignsByAccountIdResponse = CampaignManagementExampleHelper::GetCampaignsByAccountId(
    	$GLOBALS['AuthorizationData']->AccountId,
        AuthHelper::CampaignTypes,
        AuthHelper::CampaignAdditionalFields
    );
    $campaigns = $getCampaignsByAccountIdResponse->Campaigns;
    print("Campaigns:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfCampaign($campaigns);

    // Get the budget opportunities for each campaign in the current account.
    
    if(count((array)$campaigns) == 0 || !isset($campaigns->Campaign))
    {
        return;
    }

    foreach ($campaigns->Campaign as $campaign)
    {
        print("-----\r\nGetBudgetOpportunities:\r\n");
        $opportunities = AdInsightExampleHelper::GetBudgetOpportunities(
            $campaign->Id
        )->Opportunities;
        AdInsightExampleHelper::OutputArrayOfBudgetOpportunity($opportunities);
    }
}
catch (SoapFault $e)
{
	printf("-----\r\nFault Code: %s\r\nFault String: %s\r\nFault Detail: \r\n", $e->faultcode, $e->faultstring);
    var_dump($e->detail);
	print "-----\r\nLast SOAP request/response:\r\n";
    print $GLOBALS['Proxy']->GetWsdl() . "\r\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\r\n";
    print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\r\n";
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
