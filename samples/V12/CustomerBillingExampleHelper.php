<?php

namespace Microsoft\BingAds\Samples\V12;

require_once "/../vendor/autoload.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\CustomerBilling classes that will be used.
use Microsoft\BingAds\V12\CustomerBilling\AddInsertionOrderRequest;
use Microsoft\BingAds\V12\CustomerBilling\GetAccountMonthlySpendRequest;
use Microsoft\BingAds\V12\CustomerBilling\GetBillingDocumentsRequest;
use Microsoft\BingAds\V12\CustomerBilling\GetBillingDocumentsInfoRequest;
use Microsoft\BingAds\V12\CustomerBilling\GetInsertionOrdersByAccountRequest;
use Microsoft\BingAds\V12\CustomerBilling\SearchInsertionOrdersRequest;
use Microsoft\BingAds\V12\CustomerBilling\UpdateInsertionOrderRequest;

final class CustomerBillingExampleHelper {
    static function AddInsertionOrder(
        $insertionOrder)
    {
        $GLOBALS['CustomerBillingProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerBillingProxy'];

        $request = new AddInsertionOrderRequest();

        $request->InsertionOrder = $insertionOrder;

        return $GLOBALS['CustomerBillingProxy']->GetService()->AddInsertionOrder($request);
    }
    static function GetAccountMonthlySpend(
        $accountId,
        $monthYear)
    {
        $GLOBALS['CustomerBillingProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerBillingProxy'];

        $request = new GetAccountMonthlySpendRequest();

        $request->AccountId = $accountId;
        $request->MonthYear = $monthYear;

        return $GLOBALS['CustomerBillingProxy']->GetService()->GetAccountMonthlySpend($request);
    }
    static function GetBillingDocuments(
        $billingDocumentsInfo,
        $type)
    {
        $GLOBALS['CustomerBillingProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerBillingProxy'];

        $request = new GetBillingDocumentsRequest();

        $request->BillingDocumentsInfo = $billingDocumentsInfo;
        $request->Type = $type;

        return $GLOBALS['CustomerBillingProxy']->GetService()->GetBillingDocuments($request);
    }
    static function GetBillingDocumentsInfo(
        $accountIds,
        $startDate,
        $endDate)
    {
        $GLOBALS['CustomerBillingProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerBillingProxy'];

        $request = new GetBillingDocumentsInfoRequest();

        $request->AccountIds = $accountIds;
        $request->StartDate = $startDate;
        $request->EndDate = $endDate;

        return $GLOBALS['CustomerBillingProxy']->GetService()->GetBillingDocumentsInfo($request);
    }
    static function GetInsertionOrdersByAccount(
        $accountId,
        $insertionOrderIds)
    {
        $GLOBALS['CustomerBillingProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerBillingProxy'];

        $request = new GetInsertionOrdersByAccountRequest();

        $request->AccountId = $accountId;
        $request->InsertionOrderIds = $insertionOrderIds;

        return $GLOBALS['CustomerBillingProxy']->GetService()->GetInsertionOrdersByAccount($request);
    }
    static function SearchInsertionOrders(
        $predicates,
        $ordering,
        $pageInfo)
    {
        $GLOBALS['CustomerBillingProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerBillingProxy'];

        $request = new SearchInsertionOrdersRequest();

        $request->Predicates = $predicates;
        $request->Ordering = $ordering;
        $request->PageInfo = $pageInfo;

        return $GLOBALS['CustomerBillingProxy']->GetService()->SearchInsertionOrders($request);
    }
    static function UpdateInsertionOrder(
        $insertionOrder)
    {
        $GLOBALS['CustomerBillingProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerBillingProxy'];

        $request = new UpdateInsertionOrderRequest();

        $request->InsertionOrder = $insertionOrder;

        return $GLOBALS['CustomerBillingProxy']->GetService()->UpdateInsertionOrder($request);
    }
    static function OutputAdApiError($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdApiError * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Detail: %s", $dataObject->Detail));
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
        }
        self::OutputStatusMessage("* * * End OutputAdApiError * * *");
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
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdApiError * * *");
        foreach ($dataObjects->AdApiError as $dataObject)
        {
            self::OutputAdApiError($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdApiError * * *");
    }
    static function OutputAdApiFaultDetail($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdApiFaultDetail * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfAdApiError($dataObject->Errors);
        }
        self::OutputStatusMessage("* * * End OutputAdApiFaultDetail * * *");
    }
    static function OutputArrayOfAdApiFaultDetail($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdApiFaultDetail))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdApiFaultDetail * * *");
        foreach ($dataObjects->AdApiFaultDetail as $dataObject)
        {
            self::OutputAdApiFaultDetail($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdApiFaultDetail * * *");
    }
    static function OutputApiBatchFault($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputApiBatchFault * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfBatchError($dataObject->BatchErrors);
        }
        self::OutputStatusMessage("* * * End OutputApiBatchFault * * *");
    }
    static function OutputArrayOfApiBatchFault($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApiBatchFault))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfApiBatchFault * * *");
        foreach ($dataObjects->ApiBatchFault as $dataObject)
        {
            self::OutputApiBatchFault($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfApiBatchFault * * *");
    }
    static function OutputApiFault($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputApiFault * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfOperationError($dataObject->OperationErrors);
            if($dataObject->Type === "ApiBatchFault")
            {
                self::OutputApiBatchFault($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputApiFault * * *");
    }
    static function OutputArrayOfApiFault($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApiFault))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfApiFault * * *");
        foreach ($dataObjects->ApiFault as $dataObject)
        {
            self::OutputApiFault($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfApiFault * * *");
    }
    static function OutputApplicationFault($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputApplicationFault * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("TrackingId: %s", $dataObject->TrackingId));
            if($dataObject->Type === "AdApiFaultDetail")
            {
                self::OutputAdApiFaultDetail($dataObject);
            }
            if($dataObject->Type === "ApiFault")
            {
                self::OutputApiFault($dataObject);
            }
        }
        self::OutputStatusMessage("* * * End OutputApplicationFault * * *");
    }
    static function OutputArrayOfApplicationFault($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApplicationFault))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfApplicationFault * * *");
        foreach ($dataObjects->ApplicationFault as $dataObject)
        {
            self::OutputApplicationFault($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfApplicationFault * * *");
    }
    static function OutputBatchError($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBatchError * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Details: %s", $dataObject->Details));
            self::OutputStatusMessage(sprintf("Index: %s", $dataObject->Index));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
        }
        self::OutputStatusMessage("* * * End OutputBatchError * * *");
    }
    static function OutputArrayOfBatchError($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BatchError))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBatchError * * *");
        foreach ($dataObjects->BatchError as $dataObject)
        {
            self::OutputBatchError($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBatchError * * *");
    }
    static function OutputBillingDocument($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBillingDocument * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Data: %s", $dataObject->Data));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
        }
        self::OutputStatusMessage("* * * End OutputBillingDocument * * *");
    }
    static function OutputArrayOfBillingDocument($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BillingDocument))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBillingDocument * * *");
        foreach ($dataObjects->BillingDocument as $dataObject)
        {
            self::OutputBillingDocument($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBillingDocument * * *");
    }
    static function OutputBillingDocumentInfo($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBillingDocumentInfo * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
            self::OutputStatusMessage(sprintf("AccountName: %s", $dataObject->AccountName));
            self::OutputStatusMessage(sprintf("AccountNumber: %s", $dataObject->AccountNumber));
            self::OutputStatusMessage(sprintf("Amount: %s", $dataObject->Amount));
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("DocumentDate: %s", $dataObject->DocumentDate));
            self::OutputStatusMessage(sprintf("DocumentId: %s", $dataObject->DocumentId));
            self::OutputStatusMessage(sprintf("CustomerId: %s", $dataObject->CustomerId));
        }
        self::OutputStatusMessage("* * * End OutputBillingDocumentInfo * * *");
    }
    static function OutputArrayOfBillingDocumentInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BillingDocumentInfo))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBillingDocumentInfo * * *");
        foreach ($dataObjects->BillingDocumentInfo as $dataObject)
        {
            self::OutputBillingDocumentInfo($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBillingDocumentInfo * * *");
    }
    static function OutputInsertionOrder($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputInsertionOrder * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
            self::OutputStatusMessage(sprintf("BalanceAmount: %s", $dataObject->BalanceAmount));
            self::OutputStatusMessage(sprintf("BookingCountryCode: %s", $dataObject->BookingCountryCode));
            self::OutputStatusMessage(sprintf("Comment: %s", $dataObject->Comment));
            self::OutputStatusMessage(sprintf("EndDate: %s", $dataObject->EndDate));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("LastModifiedByUserId: %s", $dataObject->LastModifiedByUserId));
            self::OutputStatusMessage(sprintf("LastModifiedTime: %s", $dataObject->LastModifiedTime));
            self::OutputStatusMessage(sprintf("NotificationThreshold: %s", $dataObject->NotificationThreshold));
            self::OutputStatusMessage(sprintf("ReferenceId: %s", $dataObject->ReferenceId));
            self::OutputStatusMessage(sprintf("SpendCapAmount: %s", $dataObject->SpendCapAmount));
            self::OutputStatusMessage(sprintf("StartDate: %s", $dataObject->StartDate));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage(sprintf("PurchaseOrder: %s", $dataObject->PurchaseOrder));
            self::OutputInsertionOrderPendingChanges($dataObject->PendingChanges);
        }
        self::OutputStatusMessage("* * * End OutputInsertionOrder * * *");
    }
    static function OutputArrayOfInsertionOrder($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->InsertionOrder))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfInsertionOrder * * *");
        foreach ($dataObjects->InsertionOrder as $dataObject)
        {
            self::OutputInsertionOrder($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfInsertionOrder * * *");
    }
    static function OutputInsertionOrderPendingChanges($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputInsertionOrderPendingChanges * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Comment: %s", $dataObject->Comment));
            self::OutputStatusMessage(sprintf("EndDate: %s", $dataObject->EndDate));
            self::OutputStatusMessage(sprintf("RequestedByUserId: %s", $dataObject->RequestedByUserId));
            self::OutputStatusMessage(sprintf("ModifiedDateTime: %s", $dataObject->ModifiedDateTime));
            self::OutputStatusMessage(sprintf("NotificationThreshold: %s", $dataObject->NotificationThreshold));
            self::OutputStatusMessage(sprintf("ReferenceId: %s", $dataObject->ReferenceId));
            self::OutputStatusMessage(sprintf("SpendCapAmount: %s", $dataObject->SpendCapAmount));
            self::OutputStatusMessage(sprintf("StartDate: %s", $dataObject->StartDate));
            self::OutputStatusMessage(sprintf("Name: %s", $dataObject->Name));
            self::OutputStatusMessage(sprintf("PurchaseOrder: %s", $dataObject->PurchaseOrder));
            self::OutputStatusMessage(sprintf("ChangeStatus: %s", $dataObject->ChangeStatus));
        }
        self::OutputStatusMessage("* * * End OutputInsertionOrderPendingChanges * * *");
    }
    static function OutputArrayOfInsertionOrderPendingChanges($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->InsertionOrderPendingChanges))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfInsertionOrderPendingChanges * * *");
        foreach ($dataObjects->InsertionOrderPendingChanges as $dataObject)
        {
            self::OutputInsertionOrderPendingChanges($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfInsertionOrderPendingChanges * * *");
    }
    static function OutputOperationError($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputOperationError * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Details: %s", $dataObject->Details));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
        }
        self::OutputStatusMessage("* * * End OutputOperationError * * *");
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
        self::OutputStatusMessage("* * * Begin OutputArrayOfOperationError * * *");
        foreach ($dataObjects->OperationError as $dataObject)
        {
            self::OutputOperationError($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfOperationError * * *");
    }
    static function OutputOrderBy($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputOrderBy * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Field: %s", $dataObject->Field));
            self::OutputStatusMessage(sprintf("Order: %s", $dataObject->Order));
        }
        self::OutputStatusMessage("* * * End OutputOrderBy * * *");
    }
    static function OutputArrayOfOrderBy($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->OrderBy))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfOrderBy * * *");
        foreach ($dataObjects->OrderBy as $dataObject)
        {
            self::OutputOrderBy($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfOrderBy * * *");
    }
    static function OutputPaging($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPaging * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Index: %s", $dataObject->Index));
            self::OutputStatusMessage(sprintf("Size: %s", $dataObject->Size));
        }
        self::OutputStatusMessage("* * * End OutputPaging * * *");
    }
    static function OutputArrayOfPaging($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Paging))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPaging * * *");
        foreach ($dataObjects->Paging as $dataObject)
        {
            self::OutputPaging($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPaging * * *");
    }
    static function OutputPredicate($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPredicate * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Field: %s", $dataObject->Field));
            self::OutputStatusMessage(sprintf("Operator: %s", $dataObject->Operator));
            self::OutputStatusMessage(sprintf("Value: %s", $dataObject->Value));
        }
        self::OutputStatusMessage("* * * End OutputPredicate * * *");
    }
    static function OutputArrayOfPredicate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Predicate))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPredicate * * *");
        foreach ($dataObjects->Predicate as $dataObject)
        {
            self::OutputPredicate($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPredicate * * *");
    }
    static function OutputDataType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDataType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDataType * * *");
    }
    static function OutputArrayOfDataType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDataType * * *");
        foreach ($valueSets->DataType as $valueSet)
        {
            self::OutputDataType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDataType * * *");
    }
    static function OutputInsertionOrderStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputInsertionOrderStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputInsertionOrderStatus * * *");
    }
    static function OutputArrayOfInsertionOrderStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfInsertionOrderStatus * * *");
        foreach ($valueSets->InsertionOrderStatus as $valueSet)
        {
            self::OutputInsertionOrderStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfInsertionOrderStatus * * *");
    }
    static function OutputInsertionOrderPendingChangesStatus($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputInsertionOrderPendingChangesStatus * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputInsertionOrderPendingChangesStatus * * *");
    }
    static function OutputArrayOfInsertionOrderPendingChangesStatus($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfInsertionOrderPendingChangesStatus * * *");
        foreach ($valueSets->InsertionOrderPendingChangesStatus as $valueSet)
        {
            self::OutputInsertionOrderPendingChangesStatus($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfInsertionOrderPendingChangesStatus * * *");
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
            self::OutputStatusMessage(sprintf("Value of the string: %s", $item));
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
            self::OutputStatusMessage(sprintf("Value of the long: %s", $item));
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
            self::OutputStatusMessage(sprintf("Value of the int: %s", $item));
        }
        self::OutputStatusMessage("* * * End OutputArrayOfInt * * *");
    }
}
