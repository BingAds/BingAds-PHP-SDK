<?php

namespace Microsoft\BingAds\Samples\V13;

require_once __DIR__ . "/../vendor/autoload.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\Bulk classes that will be used.
use Microsoft\BingAds\V13\Bulk\DownloadCampaignsByAccountIdsRequest;
use Microsoft\BingAds\V13\Bulk\DownloadCampaignsByCampaignIdsRequest;
use Microsoft\BingAds\V13\Bulk\GetBulkDownloadStatusRequest;
use Microsoft\BingAds\V13\Bulk\GetBulkUploadStatusRequest;
use Microsoft\BingAds\V13\Bulk\GetBulkUploadUrlRequest;

final class BulkExampleHelper {
    static function DownloadCampaignsByAccountIds(
        $accountIds,
        $compressionType,
        $dataScope,
        $downloadEntities,
        $downloadFileType,
        $formatVersion,
        $lastSyncTimeInUTC)
    {
        $GLOBALS['BulkProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['BulkProxy'];

        $request = new DownloadCampaignsByAccountIdsRequest();

        $request->AccountIds = $accountIds;
        $request->CompressionType = $compressionType;
        $request->DataScope = $dataScope;
        $request->DownloadEntities = $downloadEntities;
        $request->DownloadFileType = $downloadFileType;
        $request->FormatVersion = $formatVersion;
        $request->LastSyncTimeInUTC = $lastSyncTimeInUTC;

        return $GLOBALS['BulkProxy']->GetService()->DownloadCampaignsByAccountIds($request);
    }
    static function DownloadCampaignsByCampaignIds(
        $campaigns,
        $compressionType,
        $dataScope,
        $downloadEntities,
        $downloadFileType,
        $formatVersion,
        $lastSyncTimeInUTC)
    {
        $GLOBALS['BulkProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['BulkProxy'];

        $request = new DownloadCampaignsByCampaignIdsRequest();

        $request->Campaigns = $campaigns;
        $request->CompressionType = $compressionType;
        $request->DataScope = $dataScope;
        $request->DownloadEntities = $downloadEntities;
        $request->DownloadFileType = $downloadFileType;
        $request->FormatVersion = $formatVersion;
        $request->LastSyncTimeInUTC = $lastSyncTimeInUTC;

        return $GLOBALS['BulkProxy']->GetService()->DownloadCampaignsByCampaignIds($request);
    }
    static function GetBulkDownloadStatus(
        $requestId)
    {
        $GLOBALS['BulkProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['BulkProxy'];

        $request = new GetBulkDownloadStatusRequest();

        $request->RequestId = $requestId;

        return $GLOBALS['BulkProxy']->GetService()->GetBulkDownloadStatus($request);
    }
    static function GetBulkUploadStatus(
        $requestId)
    {
        $GLOBALS['BulkProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['BulkProxy'];

        $request = new GetBulkUploadStatusRequest();

        $request->RequestId = $requestId;

        return $GLOBALS['BulkProxy']->GetService()->GetBulkUploadStatus($request);
    }
    static function GetBulkUploadUrl(
        $responseMode,
        $accountId)
    {
        $GLOBALS['BulkProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['BulkProxy'];

        $request = new GetBulkUploadUrlRequest();

        $request->ResponseMode = $responseMode;
        $request->AccountId = $accountId;

        return $GLOBALS['BulkProxy']->GetService()->GetBulkUploadUrl($request);
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
    static function OutputApiFaultDetail($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputApiFaultDetail * * *");
            self::OutputStatusMessage("BatchErrors:");
            self::OutputArrayOfBatchError($dataObject->BatchErrors);
            self::OutputStatusMessage("OperationErrors:");
            self::OutputArrayOfOperationError($dataObject->OperationErrors);
            self::OutputStatusMessage("* * * End OutputApiFaultDetail * * *");
        }
    }
    static function OutputArrayOfApiFaultDetail($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApiFaultDetail))
        {
            return;
        }
        foreach ($dataObjects->ApiFaultDetail as $dataObject)
        {
            self::OutputApiFaultDetail($dataObject);
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
            if($dataObject->Type === "ApiFaultDetail")
            {
                self::OutputApiFaultDetail($dataObject);
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
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
            self::OutputStatusMessage(sprintf("FieldPath: %s", $dataObject->FieldPath));
            self::OutputStatusMessage("ForwardCompatibilityMap:");
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Index: %s", $dataObject->Index));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "EditorialError")
            {
                self::OutputEditorialError($dataObject);
            }
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
    static function OutputCampaignScope($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCampaignScope * * *");
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage(sprintf("ParentAccountId: %s", $dataObject->ParentAccountId));
            self::OutputStatusMessage("* * * End OutputCampaignScope * * *");
        }
    }
    static function OutputArrayOfCampaignScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignScope))
        {
            return;
        }
        foreach ($dataObjects->CampaignScope as $dataObject)
        {
            self::OutputCampaignScope($dataObject);
        }
    }
    static function OutputEditorialError($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputEditorialError * * *");
            self::OutputStatusMessage(sprintf("Appealable: %s", $dataObject->Appealable));
            self::OutputStatusMessage(sprintf("DisapprovedText: %s", $dataObject->DisapprovedText));
            self::OutputStatusMessage(sprintf("Location: %s", $dataObject->Location));
            self::OutputStatusMessage(sprintf("PublisherCountry: %s", $dataObject->PublisherCountry));
            self::OutputStatusMessage(sprintf("ReasonCode: %s", $dataObject->ReasonCode));
            self::OutputStatusMessage("* * * End OutputEditorialError * * *");
        }
    }
    static function OutputArrayOfEditorialError($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EditorialError))
        {
            return;
        }
        else if (!is_array($dataObjects->EditorialError))
        {
            self::OutputEditorialError($dataObjects->EditorialError);
            return;
        }
        foreach ($dataObjects->EditorialError as $dataObject)
        {
            self::OutputEditorialError($dataObject);
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
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
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
    static function OutputCompressionType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCompressionType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCompressionType * * *");
    }
    static function OutputArrayOfCompressionType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCompressionType * * *");
        foreach ($valueSets->CompressionType as $valueSet)
        {
            self::OutputCompressionType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCompressionType * * *");
    }
    static function OutputDataScope($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDataScope * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDataScope * * *");
    }
    static function OutputArrayOfDataScope($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDataScope * * *");
        foreach ($valueSets->DataScope as $valueSet)
        {
            self::OutputDataScope($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDataScope * * *");
    }
    static function OutputDownloadEntity($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDownloadEntity * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDownloadEntity * * *");
    }
    static function OutputArrayOfDownloadEntity($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDownloadEntity * * *");
        foreach ($valueSets->DownloadEntity as $valueSet)
        {
            self::OutputDownloadEntity($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDownloadEntity * * *");
    }
    static function OutputDownloadFileType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDownloadFileType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDownloadFileType * * *");
    }
    static function OutputArrayOfDownloadFileType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDownloadFileType * * *");
        foreach ($valueSets->DownloadFileType as $valueSet)
        {
            self::OutputDownloadFileType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDownloadFileType * * *");
    }
    static function OutputResponseMode($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputResponseMode * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputResponseMode * * *");
    }
    static function OutputArrayOfResponseMode($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfResponseMode * * *");
        foreach ($valueSets->ResponseMode as $valueSet)
        {
            self::OutputResponseMode($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfResponseMode * * *");
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
