<?php

namespace Microsoft\BingAds\Samples\V11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";
include "/AdInsightHelper.php";
include "/CampaignManagementHelper.php";
include "/CustomerManagementHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;
use Microsoft\BingAds\Samples\V11\AdInsightHelper;
use Microsoft\BingAds\Samples\V11\CampaignManagementHelper;
use Microsoft\BingAds\Samples\V11\CustomerManagementHelper;

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

    $GLOBALS['CustomerProxy'] = new ServiceClient(ServiceClientType::CustomerManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $user = CustomerManagementHelper::GetUser(null)->User;

    // For this example we'll use the first account.

    $accounts = CustomerManagementHelper::SearchAccountsByUserId($user->Id)->Accounts;
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['AdInsightProxy'] = new ServiceClient(ServiceClientType::AdInsightVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());
    $GLOBALS['CampaignProxy'] = new ServiceClient(ServiceClientType::CampaignManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    $campaigns = CampaignManagementHelper::GetCampaignsByAccountId(
    	$GLOBALS['AuthorizationData']->AccountId,
        CampaignManagementHelper::AllCampaignTypes);

	foreach ($campaigns->Campaign as $campaign)
	{
		$opportunities = AdInsightHelper::GetBudgetOpportunities($campaign->Id)->Opportunities;

		AdInsightHelper::OutputBudgetOpportunities($opportunities, $campaign->Id);
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

?>
