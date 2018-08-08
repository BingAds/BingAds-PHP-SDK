<?php

namespace Microsoft\BingAds\Samples\V11;

require_once __DIR__ . "/../vendor/autoload.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V11\Bulk classes that will be used.
use Microsoft\BingAds\V11\Bulk\DownloadCampaignsByAccountIdsRequest;
use Microsoft\BingAds\V11\Bulk\DownloadCampaignsByCampaignIdsRequest;
use Microsoft\BingAds\V11\Bulk\GetBulkDownloadStatusRequest;
use Microsoft\BingAds\V11\Bulk\GetBulkUploadStatusRequest;
use Microsoft\BingAds\V11\Bulk\GetBulkUploadUrlRequest;

final class BulkExampleHelper {
    static function DownloadCampaignsByAccountIds(
        $accountIds,
        $compressionType,
        $dataScope,
        $downloadEntities,
        $downloadFileType,
        $formatVersion,
        $lastSyncTimeInUTC,
        $performanceStatsDateRange)
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
        $request->PerformanceStatsDateRange = $performanceStatsDateRange;

        return $GLOBALS['BulkProxy']->GetService()->DownloadCampaignsByAccountIds($request);
    }
    static function DownloadCampaignsByCampaignIds(
        $campaigns,
        $compressionType,
        $dataScope,
        $downloadEntities,
        $downloadFileType,
        $formatVersion,
        $lastSyncTimeInUTC,
        $performanceStatsDateRange)
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
        $request->PerformanceStatsDateRange = $performanceStatsDateRange;

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
    static function OutputApiFaultDetail($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputApiFaultDetail * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfBatchError($dataObject->BatchErrors);
            self::OutputArrayOfOperationError($dataObject->OperationErrors);
        }
        self::OutputStatusMessage("* * * End OutputApiFaultDetail * * *");
    }
    static function OutputArrayOfApiFaultDetail($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ApiFaultDetail))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfApiFaultDetail * * *");
        foreach ($dataObjects->ApiFaultDetail as $dataObject)
        {
            self::OutputApiFaultDetail($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfApiFaultDetail * * *");
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
            if($dataObject->Type === "ApiFaultDetail")
            {
                self::OutputApiFaultDetail($dataObject);
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
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
            self::OutputStatusMessage(sprintf("FieldPath: %s", $dataObject->FieldPath));
            self::OutputArrayOfKeyValuePairOfstringstring($dataObject->ForwardCompatibilityMap);
            self::OutputStatusMessage(sprintf("Index: %s", $dataObject->Index));
            self::OutputStatusMessage(sprintf("Message: %s", $dataObject->Message));
            self::OutputStatusMessage(sprintf("Type: %s", $dataObject->Type));
            if($dataObject->Type === "EditorialError")
            {
                self::OutputEditorialError($dataObject);
            }
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
    static function OutputCampaignScope($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignScope * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage(sprintf("ParentAccountId: %s", $dataObject->ParentAccountId));
        }
        self::OutputStatusMessage("* * * End OutputCampaignScope * * *");
    }
    static function OutputArrayOfCampaignScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignScope))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignScope * * *");
        foreach ($dataObjects->CampaignScope as $dataObject)
        {
            self::OutputCampaignScope($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignScope * * *");
    }
    static function OutputDate($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDate * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Day: %s", $dataObject->Day));
            self::OutputStatusMessage(sprintf("Month: %s", $dataObject->Month));
            self::OutputStatusMessage(sprintf("Year: %s", $dataObject->Year));
        }
        self::OutputStatusMessage("* * * End OutputDate * * *");
    }
    static function OutputArrayOfDate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Date))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDate * * *");
        foreach ($dataObjects->Date as $dataObject)
        {
            self::OutputDate($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDate * * *");
    }
    static function OutputEditorialError($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputEditorialError * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Appealable: %s", $dataObject->Appealable));
            self::OutputStatusMessage(sprintf("DisapprovedText: %s", $dataObject->DisapprovedText));
            self::OutputStatusMessage(sprintf("Location: %s", $dataObject->Location));
            self::OutputStatusMessage(sprintf("PublisherCountry: %s", $dataObject->PublisherCountry));
            self::OutputStatusMessage(sprintf("ReasonCode: %s", $dataObject->ReasonCode));
        }
        self::OutputStatusMessage("* * * End OutputEditorialError * * *");
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
        self::OutputStatusMessage("* * * Begin OutputArrayOfEditorialError * * *");
        foreach ($dataObjects->EditorialError as $dataObject)
        {
            self::OutputEditorialError($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEditorialError * * *");
    }
    static function OutputKeyValuePairOfstringstring($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeyValuePairOfstringstring * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("key: %s", $dataObject->key));
            self::OutputStatusMessage(sprintf("value: %s", $dataObject->value));
        }
        self::OutputStatusMessage("* * * End OutputKeyValuePairOfstringstring * * *");
    }
    static function OutputArrayOfKeyValuePairOfstringstring($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeyValuePairOfstringstring))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeyValuePairOfstringstring * * *");
        foreach ($dataObjects->KeyValuePairOfstringstring as $dataObject)
        {
            self::OutputKeyValuePairOfstringstring($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeyValuePairOfstringstring * * *");
    }
    static function OutputOperationError($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputOperationError * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Details: %s", $dataObject->Details));
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
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
    static function OutputPerformanceStatsDateRange($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPerformanceStatsDateRange * * *");
        if (!empty($dataObject))
        {
            self::OutputDate($dataObject->CustomDateRangeEnd);
            self::OutputDate($dataObject->CustomDateRangeStart);
            self::OutputStatusMessage(sprintf("PredefinedTime: %s", $dataObject->PredefinedTime));
        }
        self::OutputStatusMessage("* * * End OutputPerformanceStatsDateRange * * *");
    }
    static function OutputArrayOfPerformanceStatsDateRange($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PerformanceStatsDateRange))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPerformanceStatsDateRange * * *");
        foreach ($dataObjects->PerformanceStatsDateRange as $dataObject)
        {
            self::OutputPerformanceStatsDateRange($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPerformanceStatsDateRange * * *");
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
    static function OutputReportTimePeriod($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputReportTimePeriod * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputReportTimePeriod * * *");
    }
    static function OutputArrayOfReportTimePeriod($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfReportTimePeriod * * *");
        foreach ($valueSets->ReportTimePeriod as $valueSet)
        {
            self::OutputReportTimePeriod($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfReportTimePeriod * * *");
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
