<?php

namespace Microsoft\BingAds\Samples\V11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";


use SoapVar;
use SoapFault;
use Exception;


// Specify the Microsoft\BingAds\V11\CustomerManagement classes that will be used.
use Microsoft\BingAds\V11\CustomerManagement\GetCustomerPilotFeaturesRequest;
use Microsoft\BingAds\V11\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\V11\CustomerManagement\AddClientLinksRequest;
use Microsoft\BingAds\V11\CustomerManagement\SearchClientLinksRequest;
use Microsoft\BingAds\V11\CustomerManagement\SignupCustomerRequest;
use Microsoft\BingAds\V11\CustomerManagement\UpdateClientLinksRequest;
use Microsoft\BingAds\V11\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\V11\CustomerManagement\Paging;
use Microsoft\BingAds\V11\CustomerManagement\Predicate;
use Microsoft\BingAds\V11\CustomerManagement\PredicateOperator;

final class CustomerManagementHelper {

    
    static function GetCustomerPilotFeatures($customerId)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy'];
        
        $request = new GetCustomerPilotFeaturesRequest();
        $request->CustomerId = $customerId;
        
        return $GLOBALS['Proxy']->GetService()->GetCustomerPilotFeatures($request);
    }

    static function GetUser($userId)
    {   
        $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 

        $request = new GetUserRequest();
        $request->UserId = $userId;

        return $GLOBALS['Proxy']->GetService()->GetUser($request);
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

        return $GLOBALS['Proxy']->GetService()->SearchAccounts($request);
    }

    static function SignupCustomer($customer, $account, $parentCustomerId)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 
    
        $request = new SignupCustomerRequest();
        $request->Customer = $customer;
        $request->Account = $account;
        $request->ParentCustomerId = $parentCustomerId;

        return $GLOBALS['Proxy']->GetService()->SignupCustomer($request);
    }

    function SearchClientLinks(
        $ordering,
        $pageInfo,
        $predicates )
    {
        $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 
    
        $request = new SearchClientLinksRequest();
        $request->Ordering = $ordering;
        $request->PageInfo = $pageInfo;
        $request->Predicates = $predicates;

        return $GLOBALS['CustomerProxy']->GetService()->SearchClientLinks($request)->ClientLinks;
    }

    function AddClientLinks($clientLinks)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 
    
        $request = new AddClientLinksRequest();
        $request->ClientLinks = $clientLinks;

        return $GLOBALS['CustomerProxy']->GetService()->AddClientLinks($request);
    }

    function UpdateClientLinks($clientLinks)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 
    
        $request = new UpdateClientLinksRequest();
        $request->ClientLinks = $clientLinks;

        return $GLOBALS['CustomerProxy']->GetService()->UpdateClientLinks($request);
    }

    // Outputs the details of the specified user.

    static function OutputUser($user)
    {
        if(empty($user))
        {
            return;
        }

        if ($user->IsMigratedToMicrosoftAccount)
        {
            print "The user is migrated to a Microsoft account, " .
                "and the UserName field is the corresponding email address.\n\n";
        }
        else
        {
            print "The user is not yet migrated to a Microsoft account, " .
                "and the value of UserName is a legacy Bing Ads managed user.\n\n";
        }

        printf("UserName is %s\n", $user->UserName);
        printf("Bing Ads Email is %s\n", $user->ContactInfo->Email);
        printf("User Id is %d\n", $user->Id);
        printf("FirstName is %s\n", $user->Name->FirstName);
        if (!empty($user->Name->MiddleInitial))
        {
            printf("MiddleInitial is %s\n", $user->Name->MiddleInitial);
        }
        printf("LastName is %s\n\n", $user->Name->LastName);
    }


    // Outputs an account.

    static function OutputAccount($account)
    {
        if(empty($account))
        {
            return;
        }

        printf("Account Id: %d\n", $account->Id);
        printf("Account Number: %s\n", $account->Number);
        printf("Account Name: %s\n", $account->Name);
        printf("Account Parent Customer Id: %d\n", $account->ParentCustomerId);
    }

    // Prints a list of client links.

    static function OutputClientLinks($clientLinks)
    {
        if (empty($clientLinks->ClientLink))
        {
            return;
        }

        foreach ($clientLinks->ClientLink as $clientLink)
        {
            printf("Status: %s\n", $clientLink->Status);
            printf("ClientAccountId: %d\n", $clientLink->ClientAccountId);
            printf("ClientAccountNumber: %s\n", $clientLink->ClientAccountNumber);
            printf("ManagingAgencyCustomerId: %d\n", $clientLink->ManagingCustomerId);
            printf("ManagingCustomerNumber: %s\n", $clientLink->ManagingCustomerNumber);
            print($clientLink->IsBillToClient ? "IsBillToClient: True\n" : "IsBillToClient: False\n");
            printf("InviterEmail: %s\n", $clientLink->InviterEmail);
            printf("InviterName: %s\n", $clientLink->InviterName);
            printf("InviterPhone: %s\n", $clientLink->InviterPhone);
            printf("LastModifiedByUserId: %d\n", $clientLink->LastModifiedByUserId);
            printf("Name: %s\n", $clientLink->Name);
            printf("Note: %s\n", $clientLink->Note);
            print("\n");
        }
    }

    // Print errors if any occurred when adding or updating the client link.

    static function OutputPartialErrors($operationErrors, $partialErrors)
    {
        if (empty($operationErrors->OperationErrors))
        {
            return;
        }

        foreach ($operationErrors as $error)
        {
            print("OperationError\n");
            printf("Code: %s\nMessage: %s\n", $error->Code, $error->Message);
        }

        if (empty($partialErrors->ArrayOfOperationError))
        {
            return;
        }

        foreach ($partialErrors->ArrayOfOperationError as $errors)
        {
            if (!empty($errors))
            {
                foreach ($errors->OperationError as $error)
                { 
                    if (!empty($error))
                    {
                        printf("OperationError\n");
                        printf("Code: %s\nMessage: %s\n", $error->Code, $error->Message);
                    }
                }
            }
        }
    }

}

?>
