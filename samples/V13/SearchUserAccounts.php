<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

require_once __DIR__ . "/CustomerManagementExampleHelper.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\CustomerManagement classes that will be used.
use Microsoft\BingAds\V13\CustomerManagement\Paging;
use Microsoft\BingAds\V13\CustomerManagement\Predicate;
use Microsoft\BingAds\V13\CustomerManagement\PredicateOperator;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\CustomerManagementExampleHelper;

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    print("-----\r\nGetUser:\r\n");
    $getUserResponse = CustomerManagementExampleHelper::GetUser(
        null, 
        true
    );
    $user = $getUserResponse->User;
    print("User:");
    CustomerManagementExampleHelper::OutputUser($user);
    print("CustomerRoles:");
    CustomerManagementExampleHelper::OutputArrayOfCustomerRole($getUserResponse->CustomerRoles);
    print "-----\r\nLast SOAP request/response:\r\n";
    print $GLOBALS['Proxy']->GetWsdl() . "\r\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\r\n";
    print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\r\n";
    // Search for the accounts that the user can access.
    // To retrieve more than 100 accounts, increase the page size up to 1,000.
    // To retrieve more than 1,000 accounts you'll need to add paging.

    $pageInfo = new Paging();
    $pageInfo->Index = 0;    // The first page
    $pageInfo->Size = 100;   // The first 100 accounts for this page of results    

    $predicate = new Predicate();
    $predicate->Field = "UserId";
    $predicate->Operator = PredicateOperator::Equals;
    $predicate->Value = $user->Id; 

    print("-----\r\nSearchAccounts:\r\n");
    $accounts = CustomerManagementExampleHelper::SearchAccounts(
        array($predicate),
        null,
        $pageInfo
    )->Accounts;
    print("Accounts:\r\n");
    CustomerManagementExampleHelper::OutputArrayOfAdvertiserAccount($accounts);

    $customerIds = array();
    foreach ($accounts->AdvertiserAccount as $account)
    {
        $customerIds[] = $account->ParentCustomerId;
    }
    $distinctCustomerIds = array_unique($customerIds, SORT_REGULAR);
    
    foreach ($distinctCustomerIds as $customerId)
    {
        // You can find out which pilot features the customer is able to use. 
        // Each account could belong to a different customer, so use the customer ID in each account.
        print("-----\r\nGetCustomerPilotFeatures:\r\n");
        printf("Requested by CustomerId: %s\r\n", $customerId);
        $featurePilotFlags = CustomerManagementExampleHelper::GetCustomerPilotFeatures(
            $customerId
        )->FeaturePilotFlags;
        print("Customer Pilot Flags:\r\n");
        print join('; ', $featurePilotFlags->int);
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
