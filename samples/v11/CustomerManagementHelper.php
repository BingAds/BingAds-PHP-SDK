<?php

namespace Microsoft\BingAds\Samples\v11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";


use SoapVar;
use SoapFault;
use Exception;


// Specify the Microsoft\BingAds\v11\CustomerManagement classes that will be used.
use Microsoft\BingAds\v11\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\v11\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\v11\CustomerManagement\Paging;
use Microsoft\BingAds\v11\CustomerManagement\Predicate;
use Microsoft\BingAds\v11\CustomerManagement\PredicateOperator;

final class CustomerManagementHelper {

    // Gets a User object by the specified UserId.

    static function GetUser($userId)
    {   
        $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 

        $request = new GetUserRequest();
        $request->UserId = $userId;

        return $GLOBALS['Proxy']->GetService()->GetUser($request)->User;
    }

    // Searches by UserId for accounts that the user can manage.

    static function SearchAccountsByUserId($userId)
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

}

?>