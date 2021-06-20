<?php

namespace Microsoft\BingAds\Samples\V13;

require_once __DIR__ . "/../vendor/autoload.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\CustomerManagement classes that will be used.
use Microsoft\BingAds\V13\CustomerManagement\AddAccountRequest;
use Microsoft\BingAds\V13\CustomerManagement\AddClientLinksRequest;
use Microsoft\BingAds\V13\CustomerManagement\DeleteAccountRequest;
use Microsoft\BingAds\V13\CustomerManagement\DeleteCustomerRequest;
use Microsoft\BingAds\V13\CustomerManagement\DeleteUserRequest;
use Microsoft\BingAds\V13\CustomerManagement\FindAccountsRequest;
use Microsoft\BingAds\V13\CustomerManagement\FindAccountsOrCustomersInfoRequest;
use Microsoft\BingAds\V13\CustomerManagement\GetAccountRequest;
use Microsoft\BingAds\V13\CustomerManagement\GetAccountPilotFeaturesRequest;
use Microsoft\BingAds\V13\CustomerManagement\GetAccountsInfoRequest;
use Microsoft\BingAds\V13\CustomerManagement\GetCustomerRequest;
use Microsoft\BingAds\V13\CustomerManagement\GetCustomerPilotFeaturesRequest;
use Microsoft\BingAds\V13\CustomerManagement\GetCustomersInfoRequest;
use Microsoft\BingAds\V13\CustomerManagement\GetLinkedAccountsAndCustomersInfoRequest;
use Microsoft\BingAds\V13\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\V13\CustomerManagement\GetUserMFAStatusRequest;
use Microsoft\BingAds\V13\CustomerManagement\GetUsersInfoRequest;
use Microsoft\BingAds\V13\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\V13\CustomerManagement\SearchClientLinksRequest;
use Microsoft\BingAds\V13\CustomerManagement\SearchCustomersRequest;
use Microsoft\BingAds\V13\CustomerManagement\SearchUserInvitationsRequest;
use Microsoft\BingAds\V13\CustomerManagement\SendUserInvitationRequest;
use Microsoft\BingAds\V13\CustomerManagement\SignupCustomerRequest;
use Microsoft\BingAds\V13\CustomerManagement\UpdateAccountRequest;
use Microsoft\BingAds\V13\CustomerManagement\UpdateClientLinksRequest;
use Microsoft\BingAds\V13\CustomerManagement\UpdateCustomerRequest;
use Microsoft\BingAds\V13\CustomerManagement\UpdateUserRequest;
use Microsoft\BingAds\V13\CustomerManagement\UpdateUserRolesRequest;
use Microsoft\BingAds\V13\CustomerManagement\ValidateAddressRequest;

final class CustomerManagementExampleHelper {
    static function AddAccount(
        $account)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new AddAccountRequest();

        $request->Account = $account;

        return $GLOBALS['CustomerManagementProxy']->GetService()->AddAccount($request);
    }
    static function AddClientLinks(
        $clientLinks)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new AddClientLinksRequest();

        $request->ClientLinks = $clientLinks;

        return $GLOBALS['CustomerManagementProxy']->GetService()->AddClientLinks($request);
    }
    static function DeleteAccount(
        $accountId,
        $timeStamp)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new DeleteAccountRequest();

        $request->AccountId = $accountId;
        $request->TimeStamp = $timeStamp;

        return $GLOBALS['CustomerManagementProxy']->GetService()->DeleteAccount($request);
    }
    static function DeleteCustomer(
        $customerId,
        $timeStamp)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new DeleteCustomerRequest();

        $request->CustomerId = $customerId;
        $request->TimeStamp = $timeStamp;

        return $GLOBALS['CustomerManagementProxy']->GetService()->DeleteCustomer($request);
    }
    static function DeleteUser(
        $userId,
        $timeStamp)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new DeleteUserRequest();

        $request->UserId = $userId;
        $request->TimeStamp = $timeStamp;

        return $GLOBALS['CustomerManagementProxy']->GetService()->DeleteUser($request);
    }
    static function FindAccounts(
        $customerId,
        $accountFilter,
        $topN)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new FindAccountsRequest();

        $request->CustomerId = $customerId;
        $request->AccountFilter = $accountFilter;
        $request->TopN = $topN;

        return $GLOBALS['CustomerManagementProxy']->GetService()->FindAccounts($request);
    }
    static function FindAccountsOrCustomersInfo(
        $filter,
        $topN,
        $returnAdditionalFields)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new FindAccountsOrCustomersInfoRequest();

        $request->Filter = $filter;
        $request->TopN = $topN;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CustomerManagementProxy']->GetService()->FindAccountsOrCustomersInfo($request);
    }
    static function GetAccount(
        $accountId,
        $returnAdditionalFields)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetAccountRequest();

        $request->AccountId = $accountId;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetAccount($request);
    }
    static function GetAccountPilotFeatures(
        $accountId)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetAccountPilotFeaturesRequest();

        $request->AccountId = $accountId;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetAccountPilotFeatures($request);
    }
    static function GetAccountsInfo(
        $customerId,
        $onlyParentAccounts)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetAccountsInfoRequest();

        $request->CustomerId = $customerId;
        $request->OnlyParentAccounts = $onlyParentAccounts;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetAccountsInfo($request);
    }
    static function GetCustomer(
        $customerId)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetCustomerRequest();

        $request->CustomerId = $customerId;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetCustomer($request);
    }
    static function GetCustomerPilotFeatures(
        $customerId)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetCustomerPilotFeaturesRequest();

        $request->CustomerId = $customerId;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetCustomerPilotFeatures($request);
    }
    static function GetCustomersInfo(
        $customerNameFilter,
        $topN)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetCustomersInfoRequest();

        $request->CustomerNameFilter = $customerNameFilter;
        $request->TopN = $topN;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetCustomersInfo($request);
    }
    static function GetLinkedAccountsAndCustomersInfo(
        $customerId,
        $onlyParentAccounts)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetLinkedAccountsAndCustomersInfoRequest();

        $request->CustomerId = $customerId;
        $request->OnlyParentAccounts = $onlyParentAccounts;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetLinkedAccountsAndCustomersInfo($request);
    }
    static function GetUser(
        $userId)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetUserRequest();

        $request->UserId = $userId;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetUser($request);
    }
    static function GetUserMFAStatus()
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetUserMFAStatusRequest();


        return $GLOBALS['CustomerManagementProxy']->GetService()->GetUserMFAStatus($request);
    }
    static function GetUsersInfo(
        $customerId,
        $statusFilter)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new GetUsersInfoRequest();

        $request->CustomerId = $customerId;
        $request->StatusFilter = $statusFilter;

        return $GLOBALS['CustomerManagementProxy']->GetService()->GetUsersInfo($request);
    }
    static function SearchAccounts(
        $predicates,
        $ordering,
        $pageInfo,
        $returnAdditionalFields)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new SearchAccountsRequest();

        $request->Predicates = $predicates;
        $request->Ordering = $ordering;
        $request->PageInfo = $pageInfo;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['CustomerManagementProxy']->GetService()->SearchAccounts($request);
    }
    static function SearchClientLinks(
        $predicates,
        $ordering,
        $pageInfo)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new SearchClientLinksRequest();

        $request->Predicates = $predicates;
        $request->Ordering = $ordering;
        $request->PageInfo = $pageInfo;

        return $GLOBALS['CustomerManagementProxy']->GetService()->SearchClientLinks($request);
    }
    static function SearchCustomers(
        $predicates,
        $dateRange,
        $ordering,
        $pageInfo)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new SearchCustomersRequest();

        $request->Predicates = $predicates;
        $request->DateRange = $dateRange;
        $request->Ordering = $ordering;
        $request->PageInfo = $pageInfo;

        return $GLOBALS['CustomerManagementProxy']->GetService()->SearchCustomers($request);
    }
    static function SearchUserInvitations(
        $predicates)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new SearchUserInvitationsRequest();

        $request->Predicates = $predicates;

        return $GLOBALS['CustomerManagementProxy']->GetService()->SearchUserInvitations($request);
    }
    static function SendUserInvitation(
        $userInvitation)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new SendUserInvitationRequest();

        $request->UserInvitation = $userInvitation;

        return $GLOBALS['CustomerManagementProxy']->GetService()->SendUserInvitation($request);
    }
    static function SignupCustomer(
        $customer,
        $account,
        $parentCustomerId,
        $userInvitation,
        $userId)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new SignupCustomerRequest();

        $request->Customer = $customer;
        $request->Account = $account;
        $request->ParentCustomerId = $parentCustomerId;
        $request->UserInvitation = $userInvitation;
        $request->UserId = $userId;

        return $GLOBALS['CustomerManagementProxy']->GetService()->SignupCustomer($request);
    }
    static function UpdateAccount(
        $account)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new UpdateAccountRequest();

        $request->Account = $account;

        return $GLOBALS['CustomerManagementProxy']->GetService()->UpdateAccount($request);
    }
    static function UpdateClientLinks(
        $clientLinks)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new UpdateClientLinksRequest();

        $request->ClientLinks = $clientLinks;

        return $GLOBALS['CustomerManagementProxy']->GetService()->UpdateClientLinks($request);
    }
    static function UpdateCustomer(
        $customer)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new UpdateCustomerRequest();

        $request->Customer = $customer;

        return $GLOBALS['CustomerManagementProxy']->GetService()->UpdateCustomer($request);
    }
    static function UpdateUser(
        $user)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new UpdateUserRequest();

        $request->User = $user;

        return $GLOBALS['CustomerManagementProxy']->GetService()->UpdateUser($request);
    }
    static function UpdateUserRoles(
        $customerId,
        $userId,
        $newRoleId,
        $newAccountIds,
        $newCustomerIds,
        $deleteRoleId,
        $deleteAccountIds,
        $deleteCustomerIds)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new UpdateUserRolesRequest();

        $request->CustomerId = $customerId;
        $request->UserId = $userId;
        $request->NewRoleId = $newRoleId;
        $request->NewAccountIds = $newAccountIds;
        $request->NewCustomerIds = $newCustomerIds;
        $request->DeleteRoleId = $deleteRoleId;
        $request->DeleteAccountIds = $deleteAccountIds;
        $request->DeleteCustomerIds = $deleteCustomerIds;

        return $GLOBALS['CustomerManagementProxy']->GetService()->UpdateUserRoles($request);
    }
    static function ValidateAddress(
        $address)
    {
        $GLOBALS['CustomerManagementProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy'];

        $request = new ValidateAddressRequest();

        $request->Address = $address;

        return $GLOBALS['CustomerManagementProxy']->GetService()->ValidateAddress($request);
    }
    static function OutputAccountInfo($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAccountInfo * * *");
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Number: %s", $dataObject->Number));
            self::OutputStatusMessage(sprintf("AccountLifeCycleStatus: %s", $dataObject->AccountLifeCycleStatus));
            self::OutputStatusMessage(sprintf("PauseReason: %s", $dataObject->PauseReason));
            self::OutputStatusMessage("* * * End OutputAccountInfo * * *");
        }
    }
    static function OutputArrayOfAccountInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountInfo))
        {
            return;
        }
        foreach ($dataObjects->AccountInfo as $dataObject)
        {
            self::OutputAccountInfo($dataObject);
        }
    }
    static function OutputAccountInfoWithCustomerData($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAccountInfoWithCustomerData * * *");
            self::OutputStatusMessage(sprintf("CustomerId: %s", $dataObject->CustomerId));
            self::OutputStatusMessage(sprintf("CustomerName: %s", $dataObject->CustomerName));
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
            self::OutputStatusMessage(sprintf("AccountName: %s", $dataObject->AccountName));
            self::OutputStatusMessage(sprintf("AccountNumber: %s", $dataObject->AccountNumber));
            self::OutputStatusMessage(sprintf("AccountLifeCycleStatus: %s", $dataObject->AccountLifeCycleStatus));
            self::OutputStatusMessage(sprintf("PauseReason: %s", $dataObject->PauseReason));
            self::OutputStatusMessage(sprintf("AccountMode: %s", $dataObject->AccountMode));
            self::OutputStatusMessage("* * * End OutputAccountInfoWithCustomerData * * *");
        }
    }
    static function OutputArrayOfAccountInfoWithCustomerData($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountInfoWithCustomerData))
        {
            return;
        }
        foreach ($dataObjects->AccountInfoWithCustomerData as $dataObject)
        {
            self::OutputAccountInfoWithCustomerData($dataObject);
        }
    }
    static function OutputAccountTaxCertificate($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAccountTaxCertificate * * *");
            self::OutputStatusMessage(sprintf("TaxCertificateBlobContainerName: %s", $dataObject->TaxCertificateBlobContainerName));
            self::OutputStatusMessage("TaxCertificates:");
            self::OutputArrayOfKeyValuePairOfstringbase64Binary($dataObject->TaxCertificates);
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage("* * * End OutputAccountTaxCertificate * * *");
        }
    }
    static function OutputArrayOfAccountTaxCertificate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountTaxCertificate))
        {
            return;
        }
        foreach ($dataObjects->AccountTaxCertificate as $dataObject)
        {
            self::OutputAccountTaxCertificate($dataObject);
        }
    }
    static function OutputAdApiError($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdApiError * * *");
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Detail: %s", $dataObject->Detail));
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
            self::OutputStatusMessage("* * * End OutputAdApiError * * *");
        }
    }
    static function OutputArrayOfAdApiError($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdApiError))
        {
            return;
        }
        else if (!is_array($dataObjects->AdApiError))
        {
            self::OutputAdApiError($dataObjects->AdApiError);
            return;
        }
        foreach ($dataObjects->AdApiError as $dataObject)
        {
            self::OutputAdApiError($dataObject);
        }
    }
    static function OutputAdApiFaultDetail($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdApiFaultDetail * * *");
            self::OutputStatusMessage("Errors:");
            self::OutputArrayOfAdApiError($dataObject->Errors);
            self::OutputStatusMessage("* * * End OutputAdApiFaultDetail * * *");
        }
    }
    static function OutputArrayOfAdApiFaultDetail($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdApiFaultDetail))
        {
            return;
        }
        foreach ($dataObjects->AdApiFaultDetail as $dataObject)
        {
            self::OutputAdApiFaultDetail($dataObject);
        }
    }
    static function OutputAddress($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAddress * * *");
            self::OutputStatusMessage(sprintf("City: %s", $dataObject->City));
            self::OutputStatusMessage(sprintf("CountryCode: %s", $dataObject->CountryCode));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Line1: %s", $dataObject->Line1));
            self::OutputStatusMessage(sprintf("Line2: %s", $dataObject->Line2));
            self::OutputStatusMessage(sprintf("Line3: %s", $dataObject->Line3));
            self::OutputStatusMessage(sprintf("Line4: %s", $dataObject->Line4));
            self::OutputStatusMessage(sprintf("PostalCode: %s", $dataObject->PostalCode));
            self::OutputStatusMessage(sprintf("StateOrProvince: %s", $dataObject->StateOrProvince));
            self::OutputStatusMessage(sprintf("TimeStamp: %s", $dataObject->TimeStamp));
            self::OutputStatusMessage(sprintf("BusinessName: %s", $dataObject->BusinessName));
            self::OutputStatusMessage("* * * End OutputAddress * * *");
        }
    }
    static function OutputArrayOfAddress($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Address))
        {
            return;
        }
        foreach ($dataObjects->Address as $dataObject)
        {
            self::OutputAddress($dataObject);
        }
    }
    static function OutputAdvertiserAccount($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdvertiserAccount * * *");
            self::OutputStatusMessage(sprintf("BillToCustomerId: %s", $dataObject->BillToCustomerId));
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("AccountFinancialStatus: %s", $dataObject->AccountFinancialStatus));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage(sprintf("LastModifiedByUserId: %s", $dataObject->LastModifiedByUserId));
            self::OutputStatusMessage(sprintf("LastModifiedTime: %s", $dataObject->LastModifiedTime));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Number: %s", $dataObject->Number));
            self::OutputStatusMessage(sprintf("ParentCustomerId: %s", $dataObject->ParentCustomerId));
            self::OutputStatusMessage(sprintf("PaymentMethodId: %s", $dataObject->PaymentMethodId));
            self::OutputStatusMessage(sprintf("PaymentMethodType: %s", $dataObject->PaymentMethodType));
            self::OutputStatusMessage(sprintf("PrimaryUserId: %s", $dataObject->PrimaryUserId));
            self::OutputStatusMessage(sprintf("AccountLifeCycleStatus: %s", $dataObject->AccountLifeCycleStatus));
            self::OutputStatusMessage(sprintf("TimeStamp: %s", $dataObject->TimeStamp));
            self::OutputStatusMessage(sprintf("TimeZone: %s", $dataObject->TimeZone));
            self::OutputStatusMessage(sprintf("PauseReason: %s", $dataObject->PauseReason));
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage("LinkedAgencies:");
            self::OutputArrayOfCustomerInfo($dataObject->LinkedAgencies);
            self::OutputStatusMessage(sprintf("SalesHouseCustomerId: %s", $dataObject->SalesHouseCustomerId));
            self::OutputStatusMessage("TaxInformation:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->TaxInformation);
            self::OutputStatusMessage(sprintf("BackUpPaymentInstrumentId: %s", $dataObject->BackUpPaymentInstrumentId));
            self::OutputStatusMessage(sprintf("BillingThresholdAmount: %s", $dataObject->BillingThresholdAmount));
            self::OutputStatusMessage("BusinessAddress:");
            self::OutputAddress($dataObject->BusinessAddress);
            self::OutputStatusMessage(sprintf("AutoTagType: %s", $dataObject->AutoTagType));
            self::OutputStatusMessage(sprintf("SoldToPaymentInstrumentId: %s", $dataObject->SoldToPaymentInstrumentId));
            self::OutputStatusMessage("TaxCertificate:");
            self::OutputAccountTaxCertificate($dataObject->TaxCertificate);
            self::OutputStatusMessage(sprintf("AccountMode: %s", $dataObject->AccountMode));
            self::OutputStatusMessage("* * * End OutputAdvertiserAccount * * *");
        }
    }
    static function OutputArrayOfAdvertiserAccount($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdvertiserAccount))
        {
            return;
        }
        foreach ($dataObjects->AdvertiserAccount as $dataObject)
        {
            self::OutputAdvertiserAccount($dataObject);
        }
    }
    static function OutputApiFault($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputApiFault * * *");
            self::OutputStatusMessage("OperationErrors:");
            self::OutputArrayOfOperationError($dataObject->OperationErrors);
            self::OutputStatusMessage("* * * End OutputApiFault * * *");
        }
    }
    static function OutputArrayOfApiFault($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApiFault))
        {
            return;
        }
        foreach ($dataObjects->ApiFault as $dataObject)
        {
            self::OutputApiFault($dataObject);
        }
    }
    static function OutputApplicationFault($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputApplicationFault * * *");
            self::OutputStatusMessage(sprintf("TrackingId: %s", $dataObject->TrackingId));
            if($dataObject->Type === "AdApiFaultDetail")
            {
                self::OutputAdApiFaultDetail($dataObject);
            }
            if($dataObject->Type === "ApiFault")
            {
                self::OutputApiFault($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputApplicationFault * * *");
        }
    }
    static function OutputArrayOfApplicationFault($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApplicationFault))
        {
            return;
        }
        foreach ($dataObjects->ApplicationFault as $dataObject)
        {
            self::OutputApplicationFault($dataObject);
        }
    }
    static function OutputClientLink($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputClientLink * * *");
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            self::OutputStatusMessage(sprintf("ClientEntityId: %s", $dataObject->ClientEntityId));
            self::OutputStatusMessage(sprintf("ClientEntityNumber: %s", $dataObject->ClientEntityNumber));
            self::OutputStatusMessage(sprintf("ClientEntityName: %s", $dataObject->ClientEntityName));
            self::OutputStatusMessage(sprintf("ManagingCustomerId: %s", $dataObject->ManagingCustomerId));
            self::OutputStatusMessage(sprintf("ManagingCustomerNumber: %s", $dataObject->ManagingCustomerNumber));
            self::OutputStatusMessage(sprintf("ManagingCustomerName: %s", $dataObject->ManagingCustomerName));
            self::OutputStatusMessage(sprintf("Note: %s", $dataObject->Note));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("InviterEmail: %s", $dataObject->InviterEmail));
            self::OutputStatusMessage(sprintf("InviterName: %s", $dataObject->InviterName));
            self::OutputStatusMessage(sprintf("InviterPhone: %s", $dataObject->InviterPhone));
            self::OutputStatusMessage(sprintf("IsBillToClient: %s", $dataObject->IsBillToClient));
            self::OutputStatusMessage(sprintf("StartDate: %s", $dataObject->StartDate));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("SuppressNotification: %s", $dataObject->SuppressNotification));
            self::OutputStatusMessage(sprintf("LastModifiedDateTime: %s", $dataObject->LastModifiedDateTime));
            self::OutputStatusMessage(sprintf("LastModifiedByUserId: %s", $dataObject->LastModifiedByUserId));
            self::OutputStatusMessage(sprintf("Timestamp: %s", $dataObject->Timestamp));
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("CustomerLinkPermission: %s", $dataObject->CustomerLinkPermission));
            self::OutputStatusMessage("* * * End OutputClientLink * * *");
        }
    }
    static function OutputArrayOfClientLink($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ClientLink))
        {
            return;
        }
        foreach ($dataObjects->ClientLink as $dataObject)
        {
            self::OutputClientLink($dataObject);
        }
    }
    static function OutputContactInfo($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputContactInfo * * *");
            self::OutputStatusMessage("Address:");
            self::OutputAddress($dataObject->Address);
            self::OutputStatusMessage(sprintf("ContactByPhone: %s", $dataObject->ContactByPhone));
            self::OutputStatusMessage(sprintf("ContactByPostalMail: %s", $dataObject->ContactByPostalMail));
            self::OutputStatusMessage(sprintf("Email: %s", $dataObject->Email));
            self::OutputStatusMessage(sprintf("EmailFormat: %s", $dataObject->EmailFormat));
            self::OutputStatusMessage(sprintf("Fax: %s", $dataObject->Fax));
            self::OutputStatusMessage(sprintf("HomePhone: %s", $dataObject->HomePhone));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Mobile: %s", $dataObject->Mobile));
            self::OutputStatusMessage(sprintf("Phone1: %s", $dataObject->Phone1));
            self::OutputStatusMessage(sprintf("Phone2: %s", $dataObject->Phone2));
            self::OutputStatusMessage("* * * End OutputContactInfo * * *");
        }
    }
    static function OutputArrayOfContactInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ContactInfo))
        {
            return;
        }
        foreach ($dataObjects->ContactInfo as $dataObject)
        {
            self::OutputContactInfo($dataObject);
        }
    }
    static function OutputCustomer($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCustomer * * *");
            self::OutputStatusMessage(sprintf("CustomerFinancialStatus: %s", $dataObject->CustomerFinancialStatus));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Industry: %s", $dataObject->Industry));
            self::OutputStatusMessage(sprintf("LastModifiedByUserId: %s", $dataObject->LastModifiedByUserId));
            self::OutputStatusMessage(sprintf("LastModifiedTime: %s", $dataObject->LastModifiedTime));
            self::OutputStatusMessage(sprintf("MarketCountry: %s", $dataObject->MarketCountry));
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("MarketLanguage: %s", $dataObject->MarketLanguage));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("ServiceLevel: %s", $dataObject->ServiceLevel));
            self::OutputStatusMessage(sprintf("CustomerLifeCycleStatus: %s", $dataObject->CustomerLifeCycleStatus));
            self::OutputStatusMessage(sprintf("TimeStamp: %s", $dataObject->TimeStamp));
            self::OutputStatusMessage(sprintf("Number: %s", $dataObject->Number));
            self::OutputStatusMessage("CustomerAddress:");
            self::OutputAddress($dataObject->CustomerAddress);
            self::OutputStatusMessage("* * * End OutputCustomer * * *");
        }
    }
    static function OutputArrayOfCustomer($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Customer))
        {
            return;
        }
        foreach ($dataObjects->Customer as $dataObject)
        {
            self::OutputCustomer($dataObject);
        }
    }
    static function OutputCustomerInfo($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCustomerInfo * * *");
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage("* * * End OutputCustomerInfo * * *");
        }
    }
    static function OutputArrayOfCustomerInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomerInfo))
        {
            return;
        }
        foreach ($dataObjects->CustomerInfo as $dataObject)
        {
            self::OutputCustomerInfo($dataObject);
        }
    }
    static function OutputCustomerRole($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCustomerRole * * *");
            self::OutputStatusMessage(sprintf("RoleId: %s", $dataObject->RoleId));
            self::OutputStatusMessage(sprintf("CustomerId: %s", $dataObject->CustomerId));
            self::OutputStatusMessage("AccountIds:");
            self::OutputArrayOfLong($dataObject->AccountIds);
            self::OutputStatusMessage("LinkedAccountIds:");
            self::OutputArrayOfLong($dataObject->LinkedAccountIds);
            self::OutputStatusMessage(sprintf("CustomerLinkPermission: %s", $dataObject->CustomerLinkPermission));
            self::OutputStatusMessage("* * * End OutputCustomerRole * * *");
        }
    }
    static function OutputArrayOfCustomerRole($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CustomerRole))
        {
            return;
        }
        foreach ($dataObjects->CustomerRole as $dataObject)
        {
            self::OutputCustomerRole($dataObject);
        }
    }
    static function OutputDateRange($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDateRange * * *");
            self::OutputStatusMessage(sprintf("MinDate: %s", $dataObject->MinDate));
            self::OutputStatusMessage(sprintf("MaxDate: %s", $dataObject->MaxDate));
            self::OutputStatusMessage("* * * End OutputDateRange * * *");
        }
    }
    static function OutputArrayOfDateRange($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DateRange))
        {
            return;
        }
        foreach ($dataObjects->DateRange as $dataObject)
        {
            self::OutputDateRange($dataObject);
        }
    }
    static function OutputKeyValuePairOfstringbase64Binary($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeyValuePairOfstringbase64Binary * * *");
            self::OutputStatusMessage(sprintf("key: %s", $dataObject->key));
            self::OutputStatusMessage(sprintf("value: %s", $dataObject->value));
            self::OutputStatusMessage("* * * End OutputKeyValuePairOfstringbase64Binary * * *");
        }
    }
    static function OutputArrayOfKeyValuePairOfstringbase64Binary($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeyValuePairOfstringbase64Binary))
        {
            return;
        }
        foreach ($dataObjects->KeyValuePairOfstringbase64Binary as $dataObject)
        {
            self::OutputKeyValuePairOfstringbase64Binary($dataObject);
        }
    }
    static function OutputKeyValuePairOfstringstring($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeyValuePairOfstringstring * * *");
            self::OutputStatusMessage(sprintf("key: %s", $dataObject->key));
            self::OutputStatusMessage(sprintf("value: %s", $dataObject->value));
            self::OutputStatusMessage("* * * End OutputKeyValuePairOfstringstring * * *");
        }
    }
    static function OutputArrayOfKeyValuePairOfstringstring($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeyValuePairOfstringstring))
        {
            return;
        }
        foreach ($dataObjects->KeyValuePairOfstringstring as $dataObject)
        {
            self::OutputKeyValuePairOfstringstring($dataObject);
        }
    }
    static function OutputOperationError($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputOperationError * * *");
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Details: %s", $dataObject->Details));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
            self::OutputStatusMessage("* * * End OutputOperationError * * *");
        }
    }
    static function OutputArrayOfOperationError($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->OperationError))
        {
            return;
        }
        else if (!is_array($dataObjects->OperationError))
        {
            self::OutputOperationError($dataObjects->OperationError);
            return;
        }
        foreach ($dataObjects->OperationError as $dataObject)
        {
            self::OutputOperationError($dataObject);
        }
    }
    static function OutputOrderBy($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputOrderBy * * *");
            self::OutputStatusMessage(sprintf("Field: %s", $dataObject->Field));
            self::OutputStatusMessage(sprintf("Order: %s", $dataObject->Order));
            self::OutputStatusMessage("* * * End OutputOrderBy * * *");
        }
    }
    static function OutputArrayOfOrderBy($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->OrderBy))
        {
            return;
        }
        foreach ($dataObjects->OrderBy as $dataObject)
        {
            self::OutputOrderBy($dataObject);
        }
    }
    static function OutputPaging($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPaging * * *");
            self::OutputStatusMessage(sprintf("Index: %s", $dataObject->Index));
            self::OutputStatusMessage(sprintf("Size: %s", $dataObject->Size));
            self::OutputStatusMessage("* * * End OutputPaging * * *");
        }
    }
    static function OutputArrayOfPaging($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Paging))
        {
            return;
        }
        foreach ($dataObjects->Paging as $dataObject)
        {
            self::OutputPaging($dataObject);
        }
    }
    static function OutputPersonName($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPersonName * * *");
            self::OutputStatusMessage(sprintf("FirstName: %s", $dataObject->FirstName));
            self::OutputStatusMessage(sprintf("LastName: %s", $dataObject->LastName));
            self::OutputStatusMessage(sprintf("MiddleInitial: %s", $dataObject->MiddleInitial));
            self::OutputStatusMessage("* * * End OutputPersonName * * *");
        }
    }
    static function OutputArrayOfPersonName($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PersonName))
        {
            return;
        }
        foreach ($dataObjects->PersonName as $dataObject)
        {
            self::OutputPersonName($dataObject);
        }
    }
    static function OutputPredicate($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPredicate * * *");
            self::OutputStatusMessage(sprintf("Field: %s", $dataObject->Field));
            self::OutputStatusMessage(sprintf("Operator: %s", $dataObject->Operator));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
            self::OutputStatusMessage("* * * End OutputPredicate * * *");
        }
    }
    static function OutputArrayOfPredicate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Predicate))
        {
            return;
        }
        foreach ($dataObjects->Predicate as $dataObject)
        {
            self::OutputPredicate($dataObject);
        }
    }
    static function OutputUser($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputUser * * *");
            self::OutputStatusMessage("ContactInfo:");
            self::OutputContactInfo($dataObject->ContactInfo);
            self::OutputStatusMessage(sprintf("CustomerId: %s", $dataObject->CustomerId));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("JobTitle: %s", $dataObject->JobTitle));
            self::OutputStatusMessage(sprintf("LastModifiedByUserId: %s", $dataObject->LastModifiedByUserId));
            self::OutputStatusMessage(sprintf("LastModifiedTime: %s", $dataObject->LastModifiedTime));
            self::OutputStatusMessage(sprintf("Lcid: %s", $dataObject->Lcid));
            self::OutputStatusMessage("Name:");
            self::OutputPersonName($dataObject->Name);
            self::OutputStatusMessage(sprintf("Password: %s", $dataObject->Password));
            self::OutputStatusMessage(sprintf("SecretAnswer: %s", $dataObject->SecretAnswer));
            self::OutputStatusMessage(sprintf("SecretQuestion: %s", $dataObject->SecretQuestion));
            self::OutputStatusMessage(sprintf("UserLifeCycleStatus: %s", $dataObject->UserLifeCycleStatus));
            self::OutputStatusMessage(sprintf("TimeStamp: %s", $dataObject->TimeStamp));
            self::OutputStatusMessage(sprintf("UserName: %s", $dataObject->UserName));
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage("* * * End OutputUser * * *");
        }
    }
    static function OutputArrayOfUser($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->User))
        {
            return;
        }
        foreach ($dataObjects->User as $dataObject)
        {
            self::OutputUser($dataObject);
        }
    }
    static function OutputUserInfo($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputUserInfo * * *");
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("UserName: %s", $dataObject->UserName));
            self::OutputStatusMessage("* * * End OutputUserInfo * * *");
        }
    }
    static function OutputArrayOfUserInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UserInfo))
        {
            return;
        }
        foreach ($dataObjects->UserInfo as $dataObject)
        {
            self::OutputUserInfo($dataObject);
        }
    }
    static function OutputUserInvitation($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputUserInvitation * * *");
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("FirstName: %s", $dataObject->FirstName));
            self::OutputStatusMessage(sprintf("LastName: %s", $dataObject->LastName));
            self::OutputStatusMessage(sprintf("Email: %s", $dataObject->Email));
            self::OutputStatusMessage(sprintf("CustomerId: %s", $dataObject->CustomerId));
            self::OutputStatusMessage(sprintf("RoleId: %s", $dataObject->RoleId));
            self::OutputStatusMessage("AccountIds:");
            self::OutputArrayOfLong($dataObject->AccountIds);
            self::OutputStatusMessage(sprintf("ExpirationDate: %s", $dataObject->ExpirationDate));
            self::OutputStatusMessage(sprintf("Lcid: %s", $dataObject->Lcid));
            self::OutputStatusMessage("* * * End OutputUserInvitation * * *");
        }
    }
    static function OutputArrayOfUserInvitation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UserInvitation))
        {
            return;
        }
        foreach ($dataObjects->UserInvitation as $dataObject)
        {
            self::OutputUserInvitation($dataObject);
        }
    }
    static function OutputAccountLifeCycleStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountLifeCycleStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAccountLifeCycleStatus * * *");
    }
    static function OutputArrayOfAccountLifeCycleStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountLifeCycleStatus * * *");
        foreach ($valueSets->AccountLifeCycleStatus as $valueSet)
        {
            self::OutputAccountLifeCycleStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountLifeCycleStatus * * *");
    }
    static function OutputCurrencyCode($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCurrencyCode * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCurrencyCode * * *");
    }
    static function OutputArrayOfCurrencyCode($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCurrencyCode * * *");
        foreach ($valueSets->CurrencyCode as $valueSet)
        {
            self::OutputCurrencyCode($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCurrencyCode * * *");
    }
    static function OutputAccountFinancialStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountFinancialStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAccountFinancialStatus * * *");
    }
    static function OutputArrayOfAccountFinancialStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountFinancialStatus * * *");
        foreach ($valueSets->AccountFinancialStatus as $valueSet)
        {
            self::OutputAccountFinancialStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountFinancialStatus * * *");
    }
    static function OutputLanguageType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputLanguageType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputLanguageType * * *");
    }
    static function OutputArrayOfLanguageType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLanguageType * * *");
        foreach ($valueSets->LanguageType as $valueSet)
        {
            self::OutputLanguageType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLanguageType * * *");
    }
    static function OutputPaymentMethodType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputPaymentMethodType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputPaymentMethodType * * *");
    }
    static function OutputArrayOfPaymentMethodType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPaymentMethodType * * *");
        foreach ($valueSets->PaymentMethodType as $valueSet)
        {
            self::OutputPaymentMethodType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPaymentMethodType * * *");
    }
    static function OutputTimeZoneType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputTimeZoneType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputTimeZoneType * * *");
    }
    static function OutputArrayOfTimeZoneType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfTimeZoneType * * *");
        foreach ($valueSets->TimeZoneType as $valueSet)
        {
            self::OutputTimeZoneType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfTimeZoneType * * *");
    }
    static function OutputAutoTagType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAutoTagType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAutoTagType * * *");
    }
    static function OutputArrayOfAutoTagType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAutoTagType * * *");
        foreach ($valueSets->AutoTagType as $valueSet)
        {
            self::OutputAutoTagType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAutoTagType * * *");
    }
    static function OutputTaxCertificateStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputTaxCertificateStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputTaxCertificateStatus * * *");
    }
    static function OutputArrayOfTaxCertificateStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfTaxCertificateStatus * * *");
        foreach ($valueSets->TaxCertificateStatus as $valueSet)
        {
            self::OutputTaxCertificateStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfTaxCertificateStatus * * *");
    }
    static function OutputCustomerFinancialStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCustomerFinancialStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCustomerFinancialStatus * * *");
    }
    static function OutputArrayOfCustomerFinancialStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCustomerFinancialStatus * * *");
        foreach ($valueSets->CustomerFinancialStatus as $valueSet)
        {
            self::OutputCustomerFinancialStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCustomerFinancialStatus * * *");
    }
    static function OutputIndustry($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputIndustry * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputIndustry * * *");
    }
    static function OutputArrayOfIndustry($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfIndustry * * *");
        foreach ($valueSets->Industry as $valueSet)
        {
            self::OutputIndustry($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfIndustry * * *");
    }
    static function OutputServiceLevel($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputServiceLevel * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputServiceLevel * * *");
    }
    static function OutputArrayOfServiceLevel($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfServiceLevel * * *");
        foreach ($valueSets->ServiceLevel as $valueSet)
        {
            self::OutputServiceLevel($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfServiceLevel * * *");
    }
    static function OutputCustomerLifeCycleStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCustomerLifeCycleStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCustomerLifeCycleStatus * * *");
    }
    static function OutputArrayOfCustomerLifeCycleStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCustomerLifeCycleStatus * * *");
        foreach ($valueSets->CustomerLifeCycleStatus as $valueSet)
        {
            self::OutputCustomerLifeCycleStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCustomerLifeCycleStatus * * *");
    }
    static function OutputLCID($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputLCID * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputLCID * * *");
    }
    static function OutputArrayOfLCID($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLCID * * *");
        foreach ($valueSets->LCID as $valueSet)
        {
            self::OutputLCID($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLCID * * *");
    }
    static function OutputAccountAdditionalField($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountAdditionalField * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAccountAdditionalField * * *");
    }
    static function OutputArrayOfAccountAdditionalField($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountAdditionalField * * *");
        foreach ($valueSets->AccountAdditionalField as $valueSet)
        {
            self::OutputAccountAdditionalField($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountAdditionalField * * *");
    }
    static function OutputEmailFormat($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputEmailFormat * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputEmailFormat * * *");
    }
    static function OutputArrayOfEmailFormat($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEmailFormat * * *");
        foreach ($valueSets->EmailFormat as $valueSet)
        {
            self::OutputEmailFormat($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEmailFormat * * *");
    }
    static function OutputSecretQuestion($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputSecretQuestion * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputSecretQuestion * * *");
    }
    static function OutputArrayOfSecretQuestion($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSecretQuestion * * *");
        foreach ($valueSets->SecretQuestion as $valueSet)
        {
            self::OutputSecretQuestion($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSecretQuestion * * *");
    }
    static function OutputUserLifeCycleStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputUserLifeCycleStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputUserLifeCycleStatus * * *");
    }
    static function OutputArrayOfUserLifeCycleStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfUserLifeCycleStatus * * *");
        foreach ($valueSets->UserLifeCycleStatus as $valueSet)
        {
            self::OutputUserLifeCycleStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfUserLifeCycleStatus * * *");
    }
    static function OutputPredicateOperator($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputPredicateOperator * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputPredicateOperator * * *");
    }
    static function OutputArrayOfPredicateOperator($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPredicateOperator * * *");
        foreach ($valueSets->PredicateOperator as $valueSet)
        {
            self::OutputPredicateOperator($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPredicateOperator * * *");
    }
    static function OutputOrderByField($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputOrderByField * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputOrderByField * * *");
    }
    static function OutputArrayOfOrderByField($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfOrderByField * * *");
        foreach ($valueSets->OrderByField as $valueSet)
        {
            self::OutputOrderByField($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfOrderByField * * *");
    }
    static function OutputSortOrder($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputSortOrder * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputSortOrder * * *");
    }
    static function OutputArrayOfSortOrder($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSortOrder * * *");
        foreach ($valueSets->SortOrder as $valueSet)
        {
            self::OutputSortOrder($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSortOrder * * *");
    }
    static function OutputClientLinkStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputClientLinkStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputClientLinkStatus * * *");
    }
    static function OutputArrayOfClientLinkStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfClientLinkStatus * * *");
        foreach ($valueSets->ClientLinkStatus as $valueSet)
        {
            self::OutputClientLinkStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfClientLinkStatus * * *");
    }
    static function OutputStatusMessage($message)
    {
        printf(" % s\n", $message);
    }
    static function OutputArrayOfString($items)
    {
        if(count((array)$items) == 0 || !isset($items->string))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfString * * *");
        foreach ($items->string as $item)
        {
            self::OutputStatusMessage(sprintf("%s", $item));
        }
        self::OutputStatusMessage("* * * End OutputArrayOfString * * *");
    }
    static function OutputArrayOfLong($items)
    {
        if(count((array)$items) == 0 || !isset($items->long))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLong * * *");
        foreach ($items->long as $item)
        {
            self::OutputStatusMessage(sprintf("%s", $item));
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLong * * *");
    }
    static function OutputArrayOfInt($items)
    {
        if(count((array)$items) == 0 || !isset($items->int))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfInt * * *");
        foreach ($items->int as $item)
        {
            self::OutputStatusMessage(sprintf("%s", $item));
        }
        self::OutputStatusMessage("* * * End OutputArrayOfInt * * *");
    }
}
