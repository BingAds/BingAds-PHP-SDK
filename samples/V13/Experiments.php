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
use Microsoft\BingAds\Samples\V13\CampaignManagementExampleHelper;

// Specify the Microsoft\BingAds\V13\CampaignManagement classes that will be used.
use Microsoft\BingAds\V13\CampaignManagement\CampaignType;
use Microsoft\BingAds\V13\CampaignManagement\Date;
use Microsoft\BingAds\V13\CampaignManagement\Experiment;

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    // Choose a base campaign for the experiment.

    print("-----\r\nGetCampaignsByAccountId:\r\n");
    $getCampaignsByAccountIdResponse = CampaignManagementExampleHelper::GetCampaignsByAccountId(
    	$GLOBALS['AuthorizationData']->AccountId,
        AuthHelper::CampaignTypes,
        AuthHelper::CampaignAdditionalFields
    );
    $campaigns = $getCampaignsByAccountIdResponse->Campaigns;
    print("Campaigns:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfCampaign($campaigns);

    // The base campaign cannot be an experiment of another base campaign
    // i.e., the campaign's ExperimentId must be nil. 
    // Likewise the base campaign cannot use a shared budget
    // i.e., the campaign's BudgetId must be nil. 
    
    $baseCampaign = null;
    foreach ($campaigns->Campaign as $campaign) {
        if(((isset($campaign->ExperimentId) && $campaign->ExperimentId == null) || !isset($campaign->ExperimentId))
        && $campaign->BudgetId == null){
            $baseCampaign = $campaign;
            break;
        }
    }

    if($baseCampaign == null){
        print("You do not have any campaigns that are eligible for experiments.");
        return;
    }

    // Create the experiment

    $experiments = array();   
    $experiment = new Experiment();
    $experiment->BaseCampaignId = $baseCampaign->Id;
    date_default_timezone_set('UTC');
    $endDate = new Date();
    $endDate->Day = 31;
    $endDate->Month = 12;
    $endDate->Year = date("Y");
    $experiment->EndDate = $endDate;
    $experiment->ExperimentCampaignId = null;
    $experiment->ExperimentStatus = "Active";
    $experiment->ExperimentType = null;
    $experiment->Id = null;
    $experiment->Name = $baseCampaign->Name . "-Experiment";
    $startDate = new Date();
    $startDate->Day = date("d");
    $startDate->Month = date("m");
    $startDate->Year = date("Y");
    $experiment->StartDate = $startDate;
    $experiment->TrafficSplitPercent = 50;
    $experiments[] = $experiment;
    
    print("-----\r\nAddExperiments:\r\n");
    $addExperimentsResponse = CampaignManagementExampleHelper::AddExperiments(
        $experiments
    );
    $experimentIds = $addExperimentsResponse->ExperimentIds;
    print("ExperimentIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($experimentIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addExperimentsResponse->PartialErrors);

    print("-----\r\nGetExperimentsByIds:\r\n");
    $getExperimentsByIdsResponse = CampaignManagementExampleHelper::GetExperimentsByIds(
        $experimentIds,
        null
    );
    print("Experiments:");
    CampaignManagementExampleHelper::OutputArrayOfExperiment($getExperimentsByIdsResponse->Experiments);

    $experiment = $getExperimentsByIdsResponse->Experiments->Experiment[0];

    // If the experiment is in a Graduated state, then the former experiment campaign 
    // is now an independent campaign that must be deleted separately. 
    // Otherwise if you delete the base campaign (not shown here), 
    // the experiment campaign and experiment itself are also deleted.

    print("-----\r\nDeleteCampaigns:\r\n");
    CampaignManagementExampleHelper::DeleteCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        array($experiment->ExperimentCampaignId)
    );
    printf("Deleted Experiment Campaign Id %s with Status '%s'\r\n",
        $experiment->ExperimentCampaignId,
        $experiment->ExperimentStatus
    );

    print("-----\nDeleteExperiments:\r\n");
    CampaignManagementExampleHelper::DeleteExperiments(
        array($experiment->Id)
    );
    printf("Deleted Experiment Id %s\r\n", $experiment->Id);   
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
