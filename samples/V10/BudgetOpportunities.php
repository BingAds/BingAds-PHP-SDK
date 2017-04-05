<?php

namespace Microsoft\BingAds\Samples\V10;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\v10\AdInsight classes that will be used.
use Microsoft\BingAds\v10\AdInsight\GetBudgetOpportunitiesRequest;

// Specify the Microsoft\BingAds\v10\CampaignManagement classes that will be used.
use Microsoft\BingAds\v10\CampaignManagement\GetCampaignsByAccountIdRequest;
use Microsoft\BingAds\v10\CampaignManagement\CampaignType;

// Specify the Microsoft\BingAds\v9\CustomerManagement classes that will be used.
use Microsoft\BingAds\v9\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\v9\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\v9\CustomerManagement\Paging;
use Microsoft\BingAds\v9\CustomerManagement\Predicate;
use Microsoft\BingAds\v9\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\v9\CustomerManagement\Account;
use Microsoft\BingAds\v9\CustomerManagement\User;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerProxy'] = null; 
$GLOBALS['CampaignProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // You should authenticate for Bing Ads production services with a Microsoft Account, 
    // instead of providing the Bing Ads username and password set. 
    
    //AuthHelper::AuthenticateWithOAuth();

    // However, authentication with a Microsoft Account is currently not supported in Sandbox,
    // so it is recommended that you set the UserName and Password in sandbox for testing.

    AuthHelper::AuthenticateWithUserName();

    $GLOBALS['CustomerProxy'] = new ServiceClient(ServiceClientType::CustomerManagementVersion9, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $user = GetUser(null);

    // For this example we'll use the first account.

    $accounts = SearchAccountsByUserId($user->Id);
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['AdInsightProxy'] = new ServiceClient(ServiceClientType::AdInsightVersion10, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());
    $GLOBALS['CampaignProxy'] = new ServiceClient(ServiceClientType::CampaignManagementVersion10, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    $campaigns = GetCampaignsByAccountId(
    	$GLOBALS['AuthorizationData']->AccountId,
        CampaignType::SearchAndContent . ' ' . CampaignType::Shopping
    );

        foreach ($campaigns->Campaign as $campaign)
        {
    	    $opportunities = GetBudgetOpportunities(
    		$campaign->Id
            );

    	    OutputBudgetOpportunities($opportunities, $campaign->Id);
        }
}
catch (SoapFault $e)
{
	// Output the last request/response.
	
	print "\nLast SOAP request/response:\n";
    printf("Fault Code: %s\nFault String: %s\n", $e->faultcode, $e->faultstring);
	print $GLOBALS['Proxy']->GetWsdl() . "\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
	print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";
	
	// Ad Insight and Campaign Management service operations can throw AdApiFaultDetail.
	if (isset($e->detail->AdApiFaultDetail))
	{
		// Log this fault.

		print "The operation failed with the following faults:\n";

		$errors = is_array($e->detail->AdApiFaultDetail->Errors->AdApiError)
		? $e->detail->AdApiFaultDetail->Errors->AdApiError
		: array('AdApiError' => $e->detail->AdApiFaultDetail->Errors->AdApiError);

		// If the AdApiError array is not null, the following are examples of error codes that may be found.
		foreach ($errors as $error)
		{
			print "AdApiError\n";
			printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

			switch ($error->Code)
			{
				case 0:    // InternalError
					break;
				case 105:  // InvalidCredentials
					break;
				default:
					print "Please see MSDN documentation for more details about the error code output above.\n";
					break;
			}
		}
	}

	// Ad Insight and Campaign Management service operations can throw ApiFaultDetail.
	elseif (isset($e->detail->ApiFaultDetail))
	{
		// Log this fault.

		print "The operation failed with the following faults:\n";

		// If the BatchError array is not null, the following are examples of error codes that may be found.
		if (!empty($e->detail->ApiFaultDetail->BatchErrors))
		{
			$errors = is_array($e->detail->ApiFaultDetail->BatchErrors->BatchError)
			? $e->detail->ApiFaultDetail->BatchErrors->BatchError
			: array('BatchError' => $e->detail->ApiFaultDetail->BatchErrors->BatchError);

			foreach ($errors as $error)
			{
				printf("BatchError at Index: %d\n", $error->Index);
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

				switch ($error->Code)
				{
					case 0:    // InternalError
						break;
					default:
						print "Please see MSDN documentation for more details about the error code output above.\n";
						break;
				}
			}
		}

		// If the OperationError array is not null, the following are examples of error codes that may be found.
		if (!empty($e->detail->ApiFaultDetail->OperationErrors))
		{
			$errors = is_array($e->detail->ApiFaultDetail->OperationErrors->OperationError)
			? $e->detail->ApiFaultDetail->OperationErrors->OperationError
			: array('OperationError' => $e->detail->ApiFaultDetail->OperationErrors->OperationError);

			foreach ($errors as $error)
			{
				print "OperationError\n";
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

				switch ($error->Code)
				{
					case 0:    // InternalError
						break;
					case 105:  // InvalidCredentials
						break;
					case 1102:  // InvalidAccountId
						break;
					default:
						print "Please see MSDN documentation for more details about the error code output above.\n";
						break;
				}
			}
		}
	}
}
catch (Exception $e)
{
    if ($e->getPrevious())
    {
        ; // Ignore fault exceptions that we already caught.
    }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}

// Gets a User object by the specified UserId.

function GetUser($userId)
{   
    $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 

    $request = new GetUserRequest();
    $request->UserId = $userId;

    return $GLOBALS['Proxy']->GetService()->GetUser($request)->User;
}

// Searches by UserId for accounts that the user can manage.

function SearchAccountsByUserId($userId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 
  
    // Specify the page index and number of customer results per page.

    $pageInfo = new Paging();
    $pageInfo->Index = 0;    // The first page
    $pageInfo->Size = 100;   // The first 100 accounts for this page of results    

    $predicate = new Predicate();
    $predicate->Field = "UserId";
    $predicate->Operator = PredicateOperator::Equals;
    $predicate->Value = $userId; 

    $request = new SearchAccountsRequest();
    $request->Ordering = null;
    $request->PageInfo = $pageInfo;
    $request->Predicates = array($predicate);

    return $GLOBALS['Proxy']->GetService()->SearchAccounts($request)->Accounts;
}  

// Gets the budget opportunities for the specified campaign.

function GetBudgetOpportunities($campaignId)
{
	$GLOBALS['proxy'] = $GLOBALS['AdInsightProxy'];

	$request = new GetBudgetOpportunitiesRequest();
	$request->CampaignId = $campaignId;

	return $GLOBALS['AdInsightProxy']->GetService()->GetBudgetOpportunities($request)->Opportunities;
}

// Gets campaigns of the specified type for the account.

function GetCampaignsByAccountId($accountId, $campaignType)
{
	$GLOBALS['proxy'] = $GLOBALS['CampaignProxy'];
	
	$request = new GetCampaignsByAccountIdRequest();
	$request->AccountId = $accountId;
	$request->CampaignType = $campaignType;

	return $GLOBALS['CampaignProxy']->GetService()->GetCampaignsByAccountId($request)->Campaigns;
}

// Outputs the list of BudgetOpportunity objects.

function OutputBudgetOpportunities($opportunities, $campaignId)
{
    if (!empty($opportunities->Opportunity))
    {
	foreach ($opportunities->BudgetOpportunity as $opportunity) 
        {
            print "BudgetPoints: \n";
            foreach ($opportunity->BudgetPoints as $budgetPoint) 
            {
                OutputBudgetPoint($budgetPoint);
            }
            printf("BudgetType: %s\n", $opportunity->BudgetType);
            printf("CampaignId: %s\n", $opportunity->CampaignId);
            printf("CurrentBudget: %s\n", $opportunity->CurrentBudget);
            printf("IncreaseInClicks: %s\n", $opportunity->IncreaseInClicks);
            printf("IncreaseInImpressions: %s\n", $opportunity->IncreaseInImpressions);
            printf("OpportunityKey: %s\n", $opportunity->OpportunityKey);
            printf("PercentageIncreaseInClicks: %s\n", $opportunity->PercentageIncreaseInClicks);
            printf("PercentageIncreaseInImpressions: %s\n", $opportunity->PercentageIncreaseInImpressions);
            printf("RecommendedBudget: %s\n", $opportunity->RecommendedBudget);
        }
    }
    else
    {
        printf("There are no budget opportunities for CampaignId: %s\n", $campaignId);
    }
}

// Outputs the BudgetPoint object.

function OutputBudgetPoint($budgetPoint)
{
    if ($budgetPoint != null)
    {
	printf("BudgetAmount: %s\n", $budgetPoint->BudgetAmount);
        printf("BudgetPointType: %s\n", $budgetPoint->BudgetPointType);
        printf("EstimatedWeeklyClicks: %s\n", $budgetPoint->EstimatedWeeklyClicks);
        printf("EstimatedWeeklyCost: %s\n", $budgetPoint->EstimatedWeeklyCost);
        printf("EstimatedWeeklyImpressions: %s\n", $budgetPoint->EstimatedWeeklyImpressions);
    }
}


?>