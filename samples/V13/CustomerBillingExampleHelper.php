<?php

namespace Microsoft\BingAds\Samples\V13;

require_once __DIR__ . "/../vendor/autoload.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\CustomerBilling classes that will be used.
use Microsoft\BingAds\V13\CustomerBilling\AddInsertionOrderRequest;
use Microsoft\BingAds\V13\CustomerBilling\DispatchCouponsRequest;
use Microsoft\BingAds\V13\CustomerBilling\GetAccountMonthlySpendRequest;
use Microsoft\BingAds\V13\CustomerBilling\GetBillingDocumentsRequest;
use Microsoft\BingAds\V13\CustomerBilling\GetBillingDocumentsInfoRequest;
use Microsoft\BingAds\V13\CustomerBilling\RedeemCouponRequest;
use Microsoft\BingAds\V13\CustomerBilling\SearchCouponsRequest;
use Microsoft\BingAds\V13\CustomerBilling\SearchInsertionOrdersRequest;
use Microsoft\BingAds\V13\CustomerBilling\UpdateInsertionOrderRequest;

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
    static function DispatchCoupons(
        $sendToEmails,
        $customerId,
        $couponClassName)
    {
        $GLOBALS['CustomerBillingProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerBillingProxy'];

        $request = new DispatchCouponsRequest();

        $request->SendToEmails = $sendToEmails;
        $request->CustomerId = $customerId;
        $request->CouponClassName = $couponClassName;

        return $GLOBALS['CustomerBillingProxy']->GetService()->DispatchCoupons($request);
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
    static function RedeemCoupon(
        $accountId,
        $couponCode)
    {
        $GLOBALS['CustomerBillingProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerBillingProxy'];

        $request = new RedeemCouponRequest();

        $request->AccountId = $accountId;
        $request->CouponCode = $couponCode;

        return $GLOBALS['CustomerBillingProxy']->GetService()->RedeemCoupon($request);
    }
    static function SearchCoupons(
        $predicates,
        $ordering,
        $pageInfo)
    {
        $GLOBALS['CustomerBillingProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['CustomerBillingProxy'];

        $request = new SearchCouponsRequest();

        $request->Predicates = $predicates;
        $request->Ordering = $ordering;
        $request->PageInfo = $pageInfo;

        return $GLOBALS['CustomerBillingProxy']->GetService()->SearchCoupons($request);
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
    static function OutputApiBatchFault($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputApiBatchFault * * *");
            self::OutputStatusMessage("BatchErrors:");
            self::OutputArrayOfBatchError($dataObject->BatchErrors);
            self::OutputStatusMessage("* * * End OutputApiBatchFault * * *");
        }
    }
    static function OutputArrayOfApiBatchFault($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApiBatchFault))
        {
            return;
        }
        foreach ($dataObjects->ApiBatchFault as $dataObject)
        {
            self::OutputApiBatchFault($dataObject);
        }
    }
    static function OutputApiFault($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputApiFault * * *");
            self::OutputStatusMessage("OperationErrors:");
            self::OutputArrayOfOperationError($dataObject->OperationErrors);
            if($dataObject->Type === "ApiBatchFault")
            {
                self::OutputApiBatchFault($dataObject);
            }
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
    static function OutputBatchError($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBatchError * * *");
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Details: %s", $dataObject->Details));
            self::OutputStatusMessage(sprintf("Index: %s", $dataObject->Index));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
            self::OutputStatusMessage("* * * End OutputBatchError * * *");
        }
    }
    static function OutputArrayOfBatchError($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BatchError))
        {
            return;
        }
        foreach ($dataObjects->BatchError as $dataObject)
        {
            self::OutputBatchError($dataObject);
        }
    }
    static function OutputBillingDocument($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBillingDocument * * *");
            self::OutputStatusMessage(sprintf("Data: %s", $dataObject->Data));
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            self::OutputStatusMessage("* * * End OutputBillingDocument * * *");
        }
    }
    static function OutputArrayOfBillingDocument($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BillingDocument))
        {
            return;
        }
        foreach ($dataObjects->BillingDocument as $dataObject)
        {
            self::OutputBillingDocument($dataObject);
        }
    }
    static function OutputBillingDocumentInfo($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBillingDocumentInfo * * *");
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
            self::OutputStatusMessage(sprintf("AccountName: %s", $dataObject->AccountName));
            self::OutputStatusMessage(sprintf("AccountNumber: %s", $dataObject->AccountNumber));
            self::OutputStatusMessage(sprintf("Amount: %s", $dataObject->Amount));
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("DocumentDate: %s", $dataObject->DocumentDate));
            self::OutputStatusMessage(sprintf("DocumentId: %s", $dataObject->DocumentId));
            self::OutputStatusMessage(sprintf("CustomerId: %s", $dataObject->CustomerId));
            self::OutputStatusMessage("* * * End OutputBillingDocumentInfo * * *");
        }
    }
    static function OutputArrayOfBillingDocumentInfo($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BillingDocumentInfo))
        {
            return;
        }
        foreach ($dataObjects->BillingDocumentInfo as $dataObject)
        {
            self::OutputBillingDocumentInfo($dataObject);
        }
    }
    static function OutputCoupon($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCoupon * * *");
            self::OutputStatusMessage(sprintf("CouponCode: %s", $dataObject->CouponCode));
            self::OutputStatusMessage(sprintf("ClassName: %s", $dataObject->ClassName));
            self::OutputStatusMessage(sprintf("CouponType: %s", $dataObject->CouponType));
            self::OutputStatusMessage(sprintf("Amount: %s", $dataObject->Amount));
            self::OutputStatusMessage(sprintf("SpendThreshold: %s", $dataObject->SpendThreshold));
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("PercentOff: %s", $dataObject->PercentOff));
            self::OutputStatusMessage(sprintf("ActiveDuration: %s", $dataObject->ActiveDuration));
            self::OutputStatusMessage(sprintf("ExpirationDate: %s", $dataObject->ExpirationDate));
            self::OutputStatusMessage(sprintf("StartDate: %s", $dataObject->StartDate));
            self::OutputStatusMessage(sprintf("EndDate: %s", $dataObject->EndDate));
            self::OutputStatusMessage(sprintf("SendToEmail: %s", $dataObject->SendToEmail));
            self::OutputStatusMessage(sprintf("SendToDate: %s", $dataObject->SendToDate));
            self::OutputStatusMessage(sprintf("IsRedeemed: %s", $dataObject->IsRedeemed));
            self::OutputStatusMessage("RedemptionInfo:");
            self::OutputCouponRedemption($dataObject->RedemptionInfo);
            self::OutputStatusMessage("* * * End OutputCoupon * * *");
        }
    }
    static function OutputArrayOfCoupon($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Coupon))
        {
            return;
        }
        foreach ($dataObjects->Coupon as $dataObject)
        {
            self::OutputCoupon($dataObject);
        }
    }
    static function OutputCouponRedemption($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCouponRedemption * * *");
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
            self::OutputStatusMessage(sprintf("AccountNumber: %s", $dataObject->AccountNumber));
            self::OutputStatusMessage(sprintf("SpendToThreshold: %s", $dataObject->SpendToThreshold));
            self::OutputStatusMessage(sprintf("Balance: %s", $dataObject->Balance));
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("RedemptionDate: %s", $dataObject->RedemptionDate));
            self::OutputStatusMessage(sprintf("ExpirationDate: %s", $dataObject->ExpirationDate));
            self::OutputStatusMessage(sprintf("ActivationDate: %s", $dataObject->ActivationDate));
            self::OutputStatusMessage("* * * End OutputCouponRedemption * * *");
        }
    }
    static function OutputArrayOfCouponRedemption($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CouponRedemption))
        {
            return;
        }
        foreach ($dataObjects->CouponRedemption as $dataObject)
        {
            self::OutputCouponRedemption($dataObject);
        }
    }
    static function OutputInsertionOrder($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputInsertionOrder * * *");
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
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
            self::OutputStatusMessage("PendingChanges:");
            self::OutputInsertionOrderPendingChanges($dataObject->PendingChanges);
            self::OutputStatusMessage(sprintf("AccountNumber: %s", $dataObject->AccountNumber));
            self::OutputStatusMessage(sprintf("BudgetRemaining: %s", $dataObject->BudgetRemaining));
            self::OutputStatusMessage(sprintf("BudgetSpent: %s", $dataObject->BudgetSpent));
            self::OutputStatusMessage(sprintf("BudgetRemainingPercent: %s", $dataObject->BudgetRemainingPercent));
            self::OutputStatusMessage(sprintf("BudgetSpentPercent: %s", $dataObject->BudgetSpentPercent));
            self::OutputStatusMessage(sprintf("SeriesName: %s", $dataObject->SeriesName));
            self::OutputStatusMessage(sprintf("IsInSeries: %s", $dataObject->IsInSeries));
            self::OutputStatusMessage(sprintf("SeriesFrequencyType: %s", $dataObject->SeriesFrequencyType));
            self::OutputStatusMessage("* * * End OutputInsertionOrder * * *");
        }
    }
    static function OutputArrayOfInsertionOrder($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->InsertionOrder))
        {
            return;
        }
        foreach ($dataObjects->InsertionOrder as $dataObject)
        {
            self::OutputInsertionOrder($dataObject);
        }
    }
    static function OutputInsertionOrderPendingChanges($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputInsertionOrderPendingChanges * * *");
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
            self::OutputStatusMessage("* * * End OutputInsertionOrderPendingChanges * * *");
        }
    }
    static function OutputArrayOfInsertionOrderPendingChanges($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->InsertionOrderPendingChanges))
        {
            return;
        }
        foreach ($dataObjects->InsertionOrderPendingChanges as $dataObject)
        {
            self::OutputInsertionOrderPendingChanges($dataObject);
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
