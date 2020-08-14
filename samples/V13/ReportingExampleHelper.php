<?php

namespace Microsoft\BingAds\Samples\V13;

require_once __DIR__ . "/../vendor/autoload.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\Reporting classes that will be used.
use Microsoft\BingAds\V13\Reporting\PollGenerateReportRequest;
use Microsoft\BingAds\V13\Reporting\SubmitGenerateReportRequest;

final class ReportingExampleHelper {
    static function PollGenerateReport(
        $reportRequestId)
    {
        $GLOBALS['ReportingProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['ReportingProxy'];

        $request = new PollGenerateReportRequest();

        $request->ReportRequestId = $reportRequestId;

        return $GLOBALS['ReportingProxy']->GetService()->PollGenerateReport($request);
    }
    static function SubmitGenerateReport(
        $reportRequest)
    {
        $GLOBALS['ReportingProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['ReportingProxy'];

        $request = new SubmitGenerateReportRequest();

        $request->ReportRequest = $reportRequest;

        return $GLOBALS['ReportingProxy']->GetService()->SubmitGenerateReport($request);
    }
    static function OutputAccountPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAccountPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage("* * * End OutputAccountPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfAccountPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->AccountPerformanceReportFilter as $dataObject)
        {
            self::OutputAccountPerformanceReportFilter($dataObject);
        }
    }
    static function OutputAccountPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAccountPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfAccountPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputAccountPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputAccountPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfAccountPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->AccountPerformanceReportRequest as $dataObject)
        {
            self::OutputAccountPerformanceReportRequest($dataObject);
        }
    }
    static function OutputAccountReportScope($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAccountReportScope * * *");
            self::OutputStatusMessage("AccountIds:");
            self::OutputArrayOfLong($dataObject->AccountIds);
            self::OutputStatusMessage("* * * End OutputAccountReportScope * * *");
        }
    }
    static function OutputArrayOfAccountReportScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountReportScope))
        {
            return;
        }
        foreach ($dataObjects->AccountReportScope as $dataObject)
        {
            self::OutputAccountReportScope($dataObject);
        }
    }
    static function OutputAccountThroughAdGroupReportScope($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAccountThroughAdGroupReportScope * * *");
            self::OutputStatusMessage("AccountIds:");
            self::OutputArrayOfLong($dataObject->AccountIds);
            self::OutputStatusMessage("AdGroups:");
            self::OutputArrayOfAdGroupReportScope($dataObject->AdGroups);
            self::OutputStatusMessage("Campaigns:");
            self::OutputArrayOfCampaignReportScope($dataObject->Campaigns);
            self::OutputStatusMessage("* * * End OutputAccountThroughAdGroupReportScope * * *");
        }
    }
    static function OutputArrayOfAccountThroughAdGroupReportScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountThroughAdGroupReportScope))
        {
            return;
        }
        foreach ($dataObjects->AccountThroughAdGroupReportScope as $dataObject)
        {
            self::OutputAccountThroughAdGroupReportScope($dataObject);
        }
    }
    static function OutputAccountThroughCampaignReportScope($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAccountThroughCampaignReportScope * * *");
            self::OutputStatusMessage("AccountIds:");
            self::OutputArrayOfLong($dataObject->AccountIds);
            self::OutputStatusMessage("Campaigns:");
            self::OutputArrayOfCampaignReportScope($dataObject->Campaigns);
            self::OutputStatusMessage("* * * End OutputAccountThroughCampaignReportScope * * *");
        }
    }
    static function OutputArrayOfAccountThroughCampaignReportScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountThroughCampaignReportScope))
        {
            return;
        }
        foreach ($dataObjects->AccountThroughCampaignReportScope as $dataObject)
        {
            self::OutputAccountThroughCampaignReportScope($dataObject);
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
    static function OutputAdDynamicTextPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdDynamicTextPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("AdType: %s", $dataObject->AdType));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputAdDynamicTextPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfAdDynamicTextPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdDynamicTextPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->AdDynamicTextPerformanceReportFilter as $dataObject)
        {
            self::OutputAdDynamicTextPerformanceReportFilter($dataObject);
        }
    }
    static function OutputAdDynamicTextPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdDynamicTextPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfAdDynamicTextPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputAdDynamicTextPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputAdDynamicTextPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfAdDynamicTextPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdDynamicTextPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->AdDynamicTextPerformanceReportRequest as $dataObject)
        {
            self::OutputAdDynamicTextPerformanceReportRequest($dataObject);
        }
    }
    static function OutputAdExtensionByAdReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdExtensionByAdReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage("* * * End OutputAdExtensionByAdReportFilter * * *");
        }
    }
    static function OutputArrayOfAdExtensionByAdReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionByAdReportFilter))
        {
            return;
        }
        foreach ($dataObjects->AdExtensionByAdReportFilter as $dataObject)
        {
            self::OutputAdExtensionByAdReportFilter($dataObject);
        }
    }
    static function OutputAdExtensionByAdReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdExtensionByAdReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfAdExtensionByAdReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputAdExtensionByAdReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputAdExtensionByAdReportRequest * * *");
        }
    }
    static function OutputArrayOfAdExtensionByAdReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionByAdReportRequest))
        {
            return;
        }
        foreach ($dataObjects->AdExtensionByAdReportRequest as $dataObject)
        {
            self::OutputAdExtensionByAdReportRequest($dataObject);
        }
    }
    static function OutputAdExtensionByKeywordReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdExtensionByKeywordReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
            self::OutputStatusMessage("* * * End OutputAdExtensionByKeywordReportFilter * * *");
        }
    }
    static function OutputArrayOfAdExtensionByKeywordReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionByKeywordReportFilter))
        {
            return;
        }
        foreach ($dataObjects->AdExtensionByKeywordReportFilter as $dataObject)
        {
            self::OutputAdExtensionByKeywordReportFilter($dataObject);
        }
    }
    static function OutputAdExtensionByKeywordReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdExtensionByKeywordReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfAdExtensionByKeywordReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputAdExtensionByKeywordReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputAdExtensionByKeywordReportRequest * * *");
        }
    }
    static function OutputArrayOfAdExtensionByKeywordReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionByKeywordReportRequest))
        {
            return;
        }
        foreach ($dataObjects->AdExtensionByKeywordReportRequest as $dataObject)
        {
            self::OutputAdExtensionByKeywordReportRequest($dataObject);
        }
    }
    static function OutputAdExtensionDetailReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdExtensionDetailReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage("* * * End OutputAdExtensionDetailReportFilter * * *");
        }
    }
    static function OutputArrayOfAdExtensionDetailReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionDetailReportFilter))
        {
            return;
        }
        foreach ($dataObjects->AdExtensionDetailReportFilter as $dataObject)
        {
            self::OutputAdExtensionDetailReportFilter($dataObject);
        }
    }
    static function OutputAdExtensionDetailReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdExtensionDetailReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfAdExtensionDetailReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputAdExtensionDetailReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputAdExtensionDetailReportRequest * * *");
        }
    }
    static function OutputArrayOfAdExtensionDetailReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionDetailReportRequest))
        {
            return;
        }
        foreach ($dataObjects->AdExtensionDetailReportRequest as $dataObject)
        {
            self::OutputAdExtensionDetailReportRequest($dataObject);
        }
    }
    static function OutputAdGroupPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdGroupPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage("* * * End OutputAdGroupPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfAdGroupPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->AdGroupPerformanceReportFilter as $dataObject)
        {
            self::OutputAdGroupPerformanceReportFilter($dataObject);
        }
    }
    static function OutputAdGroupPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdGroupPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfAdGroupPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputAdGroupPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputAdGroupPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfAdGroupPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->AdGroupPerformanceReportRequest as $dataObject)
        {
            self::OutputAdGroupPerformanceReportRequest($dataObject);
        }
    }
    static function OutputAdGroupReportScope($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdGroupReportScope * * *");
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage("* * * End OutputAdGroupReportScope * * *");
        }
    }
    static function OutputArrayOfAdGroupReportScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupReportScope))
        {
            return;
        }
        foreach ($dataObjects->AdGroupReportScope as $dataObject)
        {
            self::OutputAdGroupReportScope($dataObject);
        }
    }
    static function OutputAdPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("AdType: %s", $dataObject->AdType));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputAdPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfAdPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->AdPerformanceReportFilter as $dataObject)
        {
            self::OutputAdPerformanceReportFilter($dataObject);
        }
    }
    static function OutputAdPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfAdPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputAdPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputAdPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfAdPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->AdPerformanceReportRequest as $dataObject)
        {
            self::OutputAdPerformanceReportRequest($dataObject);
        }
    }
    static function OutputAgeGenderAudienceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAgeGenderAudienceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputAgeGenderAudienceReportFilter * * *");
        }
    }
    static function OutputArrayOfAgeGenderAudienceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AgeGenderAudienceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->AgeGenderAudienceReportFilter as $dataObject)
        {
            self::OutputAgeGenderAudienceReportFilter($dataObject);
        }
    }
    static function OutputAgeGenderAudienceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAgeGenderAudienceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfAgeGenderAudienceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputAgeGenderAudienceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputAgeGenderAudienceReportRequest * * *");
        }
    }
    static function OutputArrayOfAgeGenderAudienceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AgeGenderAudienceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->AgeGenderAudienceReportRequest as $dataObject)
        {
            self::OutputAgeGenderAudienceReportRequest($dataObject);
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
    static function OutputAudiencePerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAudiencePerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage("* * * End OutputAudiencePerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfAudiencePerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AudiencePerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->AudiencePerformanceReportFilter as $dataObject)
        {
            self::OutputAudiencePerformanceReportFilter($dataObject);
        }
    }
    static function OutputAudiencePerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAudiencePerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfAudiencePerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputAudiencePerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputAudiencePerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfAudiencePerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AudiencePerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->AudiencePerformanceReportRequest as $dataObject)
        {
            self::OutputAudiencePerformanceReportRequest($dataObject);
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
    static function OutputBudgetSummaryReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBudgetSummaryReportRequest * * *");
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfBudgetSummaryReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughCampaignReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputBudgetSummaryReportRequest * * *");
        }
    }
    static function OutputArrayOfBudgetSummaryReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BudgetSummaryReportRequest))
        {
            return;
        }
        foreach ($dataObjects->BudgetSummaryReportRequest as $dataObject)
        {
            self::OutputBudgetSummaryReportRequest($dataObject);
        }
    }
    static function OutputCallDetailReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCallDetailReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage("* * * End OutputCallDetailReportFilter * * *");
        }
    }
    static function OutputArrayOfCallDetailReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CallDetailReportFilter))
        {
            return;
        }
        foreach ($dataObjects->CallDetailReportFilter as $dataObject)
        {
            self::OutputCallDetailReportFilter($dataObject);
        }
    }
    static function OutputCallDetailReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCallDetailReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfCallDetailReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputCallDetailReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputCallDetailReportRequest * * *");
        }
    }
    static function OutputArrayOfCallDetailReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CallDetailReportRequest))
        {
            return;
        }
        foreach ($dataObjects->CallDetailReportRequest as $dataObject)
        {
            self::OutputCallDetailReportRequest($dataObject);
        }
    }
    static function OutputCampaignPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCampaignPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage("* * * End OutputCampaignPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfCampaignPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->CampaignPerformanceReportFilter as $dataObject)
        {
            self::OutputCampaignPerformanceReportFilter($dataObject);
        }
    }
    static function OutputCampaignPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCampaignPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfCampaignPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputCampaignPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughCampaignReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputCampaignPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfCampaignPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->CampaignPerformanceReportRequest as $dataObject)
        {
            self::OutputCampaignPerformanceReportRequest($dataObject);
        }
    }
    static function OutputCampaignReportScope($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCampaignReportScope * * *");
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage("* * * End OutputCampaignReportScope * * *");
        }
    }
    static function OutputArrayOfCampaignReportScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignReportScope))
        {
            return;
        }
        foreach ($dataObjects->CampaignReportScope as $dataObject)
        {
            self::OutputCampaignReportScope($dataObject);
        }
    }
    static function OutputConversionPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputConversionPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
            self::OutputStatusMessage("Keywords:");
            self::OutputArrayOfString($dataObject->Keywords);
            self::OutputStatusMessage("* * * End OutputConversionPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfConversionPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ConversionPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->ConversionPerformanceReportFilter as $dataObject)
        {
            self::OutputConversionPerformanceReportFilter($dataObject);
        }
    }
    static function OutputConversionPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputConversionPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfConversionPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputConversionPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputConversionPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfConversionPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ConversionPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->ConversionPerformanceReportRequest as $dataObject)
        {
            self::OutputConversionPerformanceReportRequest($dataObject);
        }
    }
    static function OutputDate($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDate * * *");
            self::OutputStatusMessage(sprintf("Day: %s", $dataObject->Day));
            self::OutputStatusMessage(sprintf("Month: %s", $dataObject->Month));
            self::OutputStatusMessage(sprintf("Year: %s", $dataObject->Year));
            self::OutputStatusMessage("* * * End OutputDate * * *");
        }
    }
    static function OutputArrayOfDate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Date))
        {
            return;
        }
        foreach ($dataObjects->Date as $dataObject)
        {
            self::OutputDate($dataObject);
        }
    }
    static function OutputDestinationUrlPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDestinationUrlPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputDestinationUrlPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfDestinationUrlPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DestinationUrlPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->DestinationUrlPerformanceReportFilter as $dataObject)
        {
            self::OutputDestinationUrlPerformanceReportFilter($dataObject);
        }
    }
    static function OutputDestinationUrlPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDestinationUrlPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfDestinationUrlPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputDestinationUrlPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputDestinationUrlPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfDestinationUrlPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DestinationUrlPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->DestinationUrlPerformanceReportRequest as $dataObject)
        {
            self::OutputDestinationUrlPerformanceReportRequest($dataObject);
        }
    }
    static function OutputDSAAutoTargetPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDSAAutoTargetPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("BidStrategyType: %s", $dataObject->BidStrategyType));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DynamicAdTargetStatus: %s", $dataObject->DynamicAdTargetStatus));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputDSAAutoTargetPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfDSAAutoTargetPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DSAAutoTargetPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->DSAAutoTargetPerformanceReportFilter as $dataObject)
        {
            self::OutputDSAAutoTargetPerformanceReportFilter($dataObject);
        }
    }
    static function OutputDSAAutoTargetPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDSAAutoTargetPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfDSAAutoTargetPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputDSAAutoTargetPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputDSAAutoTargetPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfDSAAutoTargetPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DSAAutoTargetPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->DSAAutoTargetPerformanceReportRequest as $dataObject)
        {
            self::OutputDSAAutoTargetPerformanceReportRequest($dataObject);
        }
    }
    static function OutputDSACategoryPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDSACategoryPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputDSACategoryPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfDSACategoryPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DSACategoryPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->DSACategoryPerformanceReportFilter as $dataObject)
        {
            self::OutputDSACategoryPerformanceReportFilter($dataObject);
        }
    }
    static function OutputDSACategoryPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDSACategoryPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfDSACategoryPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputDSACategoryPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputDSACategoryPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfDSACategoryPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DSACategoryPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->DSACategoryPerformanceReportRequest as $dataObject)
        {
            self::OutputDSACategoryPerformanceReportRequest($dataObject);
        }
    }
    static function OutputDSASearchQueryPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDSASearchQueryPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("ExcludeZeroClicks: %s", $dataObject->ExcludeZeroClicks));
            self::OutputStatusMessage(sprintf("FeedUrl: %s", $dataObject->FeedUrl));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("SearchQueries:");
            self::OutputArrayOfString($dataObject->SearchQueries);
            self::OutputStatusMessage("* * * End OutputDSASearchQueryPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfDSASearchQueryPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DSASearchQueryPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->DSASearchQueryPerformanceReportFilter as $dataObject)
        {
            self::OutputDSASearchQueryPerformanceReportFilter($dataObject);
        }
    }
    static function OutputDSASearchQueryPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDSASearchQueryPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfDSASearchQueryPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputDSASearchQueryPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputDSASearchQueryPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfDSASearchQueryPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DSASearchQueryPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->DSASearchQueryPerformanceReportRequest as $dataObject)
        {
            self::OutputDSASearchQueryPerformanceReportRequest($dataObject);
        }
    }
    static function OutputGeographicPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputGeographicPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage("CountryCode:");
            self::OutputArrayOfString($dataObject->CountryCode);
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputGeographicPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfGeographicPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GeographicPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->GeographicPerformanceReportFilter as $dataObject)
        {
            self::OutputGeographicPerformanceReportFilter($dataObject);
        }
    }
    static function OutputGeographicPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputGeographicPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfGeographicPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputGeographicPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputGeographicPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfGeographicPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GeographicPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->GeographicPerformanceReportRequest as $dataObject)
        {
            self::OutputGeographicPerformanceReportRequest($dataObject);
        }
    }
    static function OutputGoalsAndFunnelsReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputGoalsAndFunnelsReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage("GoalIds:");
            self::OutputArrayOfLong($dataObject->GoalIds);
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
            self::OutputStatusMessage("* * * End OutputGoalsAndFunnelsReportFilter * * *");
        }
    }
    static function OutputArrayOfGoalsAndFunnelsReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GoalsAndFunnelsReportFilter))
        {
            return;
        }
        foreach ($dataObjects->GoalsAndFunnelsReportFilter as $dataObject)
        {
            self::OutputGoalsAndFunnelsReportFilter($dataObject);
        }
    }
    static function OutputGoalsAndFunnelsReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputGoalsAndFunnelsReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfGoalsAndFunnelsReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputGoalsAndFunnelsReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputGoalsAndFunnelsReportRequest * * *");
        }
    }
    static function OutputArrayOfGoalsAndFunnelsReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GoalsAndFunnelsReportRequest))
        {
            return;
        }
        foreach ($dataObjects->GoalsAndFunnelsReportRequest as $dataObject)
        {
            self::OutputGoalsAndFunnelsReportRequest($dataObject);
        }
    }
    static function OutputKeywordPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage("AdRelevance:");
            self::OutputArrayOfInt($dataObject->AdRelevance);
            self::OutputStatusMessage(sprintf("AdType: %s", $dataObject->AdType));
            self::OutputStatusMessage(sprintf("BidMatchType: %s", $dataObject->BidMatchType));
            self::OutputStatusMessage(sprintf("BidStrategyType: %s", $dataObject->BidStrategyType));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeliveredMatchType: %s", $dataObject->DeliveredMatchType));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage("ExpectedCtr:");
            self::OutputArrayOfInt($dataObject->ExpectedCtr);
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
            self::OutputStatusMessage("Keywords:");
            self::OutputArrayOfString($dataObject->Keywords);
            self::OutputStatusMessage("LandingPageExperience:");
            self::OutputArrayOfInt($dataObject->LandingPageExperience);
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("QualityScore:");
            self::OutputArrayOfInt($dataObject->QualityScore);
            self::OutputStatusMessage("* * * End OutputKeywordPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfKeywordPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->KeywordPerformanceReportFilter as $dataObject)
        {
            self::OutputKeywordPerformanceReportFilter($dataObject);
        }
    }
    static function OutputKeywordPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfKeywordPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputKeywordPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage(sprintf("MaxRows: %s", $dataObject->MaxRows));
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Sort:");
            self::OutputArrayOfKeywordPerformanceReportSort($dataObject->Sort);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputKeywordPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfKeywordPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->KeywordPerformanceReportRequest as $dataObject)
        {
            self::OutputKeywordPerformanceReportRequest($dataObject);
        }
    }
    static function OutputKeywordPerformanceReportSort($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordPerformanceReportSort * * *");
            self::OutputStatusMessage(sprintf("SortColumn: %s", $dataObject->SortColumn));
            self::OutputStatusMessage(sprintf("SortOrder: %s", $dataObject->SortOrder));
            self::OutputStatusMessage("* * * End OutputKeywordPerformanceReportSort * * *");
        }
    }
    static function OutputArrayOfKeywordPerformanceReportSort($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordPerformanceReportSort))
        {
            return;
        }
        foreach ($dataObjects->KeywordPerformanceReportSort as $dataObject)
        {
            self::OutputKeywordPerformanceReportSort($dataObject);
        }
    }
    static function OutputNegativeKeywordConflictReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputNegativeKeywordConflictReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
            self::OutputStatusMessage("* * * End OutputNegativeKeywordConflictReportFilter * * *");
        }
    }
    static function OutputArrayOfNegativeKeywordConflictReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeKeywordConflictReportFilter))
        {
            return;
        }
        foreach ($dataObjects->NegativeKeywordConflictReportFilter as $dataObject)
        {
            self::OutputNegativeKeywordConflictReportFilter($dataObject);
        }
    }
    static function OutputNegativeKeywordConflictReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputNegativeKeywordConflictReportRequest * * *");
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfNegativeKeywordConflictReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputNegativeKeywordConflictReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("* * * End OutputNegativeKeywordConflictReportRequest * * *");
        }
    }
    static function OutputArrayOfNegativeKeywordConflictReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeKeywordConflictReportRequest))
        {
            return;
        }
        foreach ($dataObjects->NegativeKeywordConflictReportRequest as $dataObject)
        {
            self::OutputNegativeKeywordConflictReportRequest($dataObject);
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
    static function OutputProductDimensionPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductDimensionPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputProductDimensionPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfProductDimensionPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductDimensionPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->ProductDimensionPerformanceReportFilter as $dataObject)
        {
            self::OutputProductDimensionPerformanceReportFilter($dataObject);
        }
    }
    static function OutputProductDimensionPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductDimensionPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfProductDimensionPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputProductDimensionPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputProductDimensionPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfProductDimensionPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductDimensionPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->ProductDimensionPerformanceReportRequest as $dataObject)
        {
            self::OutputProductDimensionPerformanceReportRequest($dataObject);
        }
    }
    static function OutputProductMatchCountReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductMatchCountReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfProductMatchCountReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputProductMatchCountReportRequest * * *");
        }
    }
    static function OutputArrayOfProductMatchCountReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductMatchCountReportRequest))
        {
            return;
        }
        foreach ($dataObjects->ProductMatchCountReportRequest as $dataObject)
        {
            self::OutputProductMatchCountReportRequest($dataObject);
        }
    }
    static function OutputProductNegativeKeywordConflictReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductNegativeKeywordConflictReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage("* * * End OutputProductNegativeKeywordConflictReportFilter * * *");
        }
    }
    static function OutputArrayOfProductNegativeKeywordConflictReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductNegativeKeywordConflictReportFilter))
        {
            return;
        }
        foreach ($dataObjects->ProductNegativeKeywordConflictReportFilter as $dataObject)
        {
            self::OutputProductNegativeKeywordConflictReportFilter($dataObject);
        }
    }
    static function OutputProductNegativeKeywordConflictReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductNegativeKeywordConflictReportRequest * * *");
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfProductNegativeKeywordConflictReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputProductNegativeKeywordConflictReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("* * * End OutputProductNegativeKeywordConflictReportRequest * * *");
        }
    }
    static function OutputArrayOfProductNegativeKeywordConflictReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductNegativeKeywordConflictReportRequest))
        {
            return;
        }
        foreach ($dataObjects->ProductNegativeKeywordConflictReportRequest as $dataObject)
        {
            self::OutputProductNegativeKeywordConflictReportRequest($dataObject);
        }
    }
    static function OutputProductPartitionPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductPartitionPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputProductPartitionPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfProductPartitionPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductPartitionPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->ProductPartitionPerformanceReportFilter as $dataObject)
        {
            self::OutputProductPartitionPerformanceReportFilter($dataObject);
        }
    }
    static function OutputProductPartitionPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductPartitionPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfProductPartitionPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputProductPartitionPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputProductPartitionPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfProductPartitionPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductPartitionPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->ProductPartitionPerformanceReportRequest as $dataObject)
        {
            self::OutputProductPartitionPerformanceReportRequest($dataObject);
        }
    }
    static function OutputProductPartitionUnitPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductPartitionUnitPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputProductPartitionUnitPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfProductPartitionUnitPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductPartitionUnitPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->ProductPartitionUnitPerformanceReportFilter as $dataObject)
        {
            self::OutputProductPartitionUnitPerformanceReportFilter($dataObject);
        }
    }
    static function OutputProductPartitionUnitPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductPartitionUnitPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfProductPartitionUnitPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputProductPartitionUnitPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputProductPartitionUnitPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfProductPartitionUnitPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductPartitionUnitPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->ProductPartitionUnitPerformanceReportRequest as $dataObject)
        {
            self::OutputProductPartitionUnitPerformanceReportRequest($dataObject);
        }
    }
    static function OutputProductSearchQueryPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductSearchQueryPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("AdType: %s", $dataObject->AdType));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("ExcludeZeroClicks: %s", $dataObject->ExcludeZeroClicks));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("SearchQueries:");
            self::OutputArrayOfString($dataObject->SearchQueries);
            self::OutputStatusMessage("* * * End OutputProductSearchQueryPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfProductSearchQueryPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductSearchQueryPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->ProductSearchQueryPerformanceReportFilter as $dataObject)
        {
            self::OutputProductSearchQueryPerformanceReportFilter($dataObject);
        }
    }
    static function OutputProductSearchQueryPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProductSearchQueryPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfProductSearchQueryPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputProductSearchQueryPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputProductSearchQueryPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfProductSearchQueryPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductSearchQueryPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->ProductSearchQueryPerformanceReportRequest as $dataObject)
        {
            self::OutputProductSearchQueryPerformanceReportRequest($dataObject);
        }
    }
    static function OutputProfessionalDemographicsAudienceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProfessionalDemographicsAudienceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputProfessionalDemographicsAudienceReportFilter * * *");
        }
    }
    static function OutputArrayOfProfessionalDemographicsAudienceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProfessionalDemographicsAudienceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->ProfessionalDemographicsAudienceReportFilter as $dataObject)
        {
            self::OutputProfessionalDemographicsAudienceReportFilter($dataObject);
        }
    }
    static function OutputProfessionalDemographicsAudienceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputProfessionalDemographicsAudienceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfProfessionalDemographicsAudienceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputProfessionalDemographicsAudienceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputProfessionalDemographicsAudienceReportRequest * * *");
        }
    }
    static function OutputArrayOfProfessionalDemographicsAudienceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProfessionalDemographicsAudienceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->ProfessionalDemographicsAudienceReportRequest as $dataObject)
        {
            self::OutputProfessionalDemographicsAudienceReportRequest($dataObject);
        }
    }
    static function OutputPublisherUsagePerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPublisherUsagePerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputPublisherUsagePerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfPublisherUsagePerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PublisherUsagePerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->PublisherUsagePerformanceReportFilter as $dataObject)
        {
            self::OutputPublisherUsagePerformanceReportFilter($dataObject);
        }
    }
    static function OutputPublisherUsagePerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputPublisherUsagePerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfPublisherUsagePerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputPublisherUsagePerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputPublisherUsagePerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfPublisherUsagePerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PublisherUsagePerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->PublisherUsagePerformanceReportRequest as $dataObject)
        {
            self::OutputPublisherUsagePerformanceReportRequest($dataObject);
        }
    }
    static function OutputReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputReportRequest * * *");
            self::OutputStatusMessage(sprintf("ExcludeColumnHeaders: %s", $dataObject->ExcludeColumnHeaders));
            self::OutputStatusMessage(sprintf("ExcludeReportFooter: %s", $dataObject->ExcludeReportFooter));
            self::OutputStatusMessage(sprintf("ExcludeReportHeader: %s", $dataObject->ExcludeReportHeader));
            self::OutputStatusMessage(sprintf("Format: %s", $dataObject->Format));
            self::OutputStatusMessage(sprintf("FormatVersion: %s", $dataObject->FormatVersion));
            self::OutputStatusMessage(sprintf("ReportName: %s", $dataObject->ReportName));
            self::OutputStatusMessage(sprintf("ReturnOnlyCompleteData: %s", $dataObject->ReturnOnlyCompleteData));
            if($dataObject->Type === "AccountPerformanceReportRequest")
            {
                self::OutputAccountPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "AdDynamicTextPerformanceReportRequest")
            {
                self::OutputAdDynamicTextPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "AdExtensionByAdReportRequest")
            {
                self::OutputAdExtensionByAdReportRequest($dataObject);
            }
            if($dataObject->Type === "AdExtensionByKeywordReportRequest")
            {
                self::OutputAdExtensionByKeywordReportRequest($dataObject);
            }
            if($dataObject->Type === "AdExtensionDetailReportRequest")
            {
                self::OutputAdExtensionDetailReportRequest($dataObject);
            }
            if($dataObject->Type === "AdGroupPerformanceReportRequest")
            {
                self::OutputAdGroupPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "AdPerformanceReportRequest")
            {
                self::OutputAdPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "AgeGenderAudienceReportRequest")
            {
                self::OutputAgeGenderAudienceReportRequest($dataObject);
            }
            if($dataObject->Type === "AudiencePerformanceReportRequest")
            {
                self::OutputAudiencePerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "BudgetSummaryReportRequest")
            {
                self::OutputBudgetSummaryReportRequest($dataObject);
            }
            if($dataObject->Type === "CallDetailReportRequest")
            {
                self::OutputCallDetailReportRequest($dataObject);
            }
            if($dataObject->Type === "CampaignPerformanceReportRequest")
            {
                self::OutputCampaignPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "ConversionPerformanceReportRequest")
            {
                self::OutputConversionPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "DestinationUrlPerformanceReportRequest")
            {
                self::OutputDestinationUrlPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "DSAAutoTargetPerformanceReportRequest")
            {
                self::OutputDSAAutoTargetPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "DSACategoryPerformanceReportRequest")
            {
                self::OutputDSACategoryPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "DSASearchQueryPerformanceReportRequest")
            {
                self::OutputDSASearchQueryPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "GeographicPerformanceReportRequest")
            {
                self::OutputGeographicPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "GoalsAndFunnelsReportRequest")
            {
                self::OutputGoalsAndFunnelsReportRequest($dataObject);
            }
            if($dataObject->Type === "KeywordPerformanceReportRequest")
            {
                self::OutputKeywordPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "NegativeKeywordConflictReportRequest")
            {
                self::OutputNegativeKeywordConflictReportRequest($dataObject);
            }
            if($dataObject->Type === "ProductDimensionPerformanceReportRequest")
            {
                self::OutputProductDimensionPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "ProductMatchCountReportRequest")
            {
                self::OutputProductMatchCountReportRequest($dataObject);
            }
            if($dataObject->Type === "ProductNegativeKeywordConflictReportRequest")
            {
                self::OutputProductNegativeKeywordConflictReportRequest($dataObject);
            }
            if($dataObject->Type === "ProductPartitionPerformanceReportRequest")
            {
                self::OutputProductPartitionPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "ProductPartitionUnitPerformanceReportRequest")
            {
                self::OutputProductPartitionUnitPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "ProductSearchQueryPerformanceReportRequest")
            {
                self::OutputProductSearchQueryPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "ProfessionalDemographicsAudienceReportRequest")
            {
                self::OutputProfessionalDemographicsAudienceReportRequest($dataObject);
            }
            if($dataObject->Type === "PublisherUsagePerformanceReportRequest")
            {
                self::OutputPublisherUsagePerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "SearchCampaignChangeHistoryReportRequest")
            {
                self::OutputSearchCampaignChangeHistoryReportRequest($dataObject);
            }
            if($dataObject->Type === "SearchQueryPerformanceReportRequest")
            {
                self::OutputSearchQueryPerformanceReportRequest($dataObject);
            }
            if($dataObject->Type === "ShareOfVoiceReportRequest")
            {
                self::OutputShareOfVoiceReportRequest($dataObject);
            }
            if($dataObject->Type === "UserLocationPerformanceReportRequest")
            {
                self::OutputUserLocationPerformanceReportRequest($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputReportRequest * * *");
        }
    }
    static function OutputArrayOfReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ReportRequest))
        {
            return;
        }
        foreach ($dataObjects->ReportRequest as $dataObject)
        {
            self::OutputReportRequest($dataObject);
        }
    }
    static function OutputReportRequestStatus($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputReportRequestStatus * * *");
            self::OutputStatusMessage(sprintf("ReportDownloadUrl: %s", $dataObject->ReportDownloadUrl));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
            self::OutputStatusMessage("* * * End OutputReportRequestStatus * * *");
        }
    }
    static function OutputArrayOfReportRequestStatus($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ReportRequestStatus))
        {
            return;
        }
        foreach ($dataObjects->ReportRequestStatus as $dataObject)
        {
            self::OutputReportRequestStatus($dataObject);
        }
    }
    static function OutputReportTime($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputReportTime * * *");
            self::OutputStatusMessage("CustomDateRangeEnd:");
            self::OutputDate($dataObject->CustomDateRangeEnd);
            self::OutputStatusMessage("CustomDateRangeStart:");
            self::OutputDate($dataObject->CustomDateRangeStart);
            self::OutputStatusMessage(sprintf("PredefinedTime: %s", $dataObject->PredefinedTime));
            self::OutputStatusMessage(sprintf("ReportTimeZone: %s", $dataObject->ReportTimeZone));
            self::OutputStatusMessage("* * * End OutputReportTime * * *");
        }
    }
    static function OutputArrayOfReportTime($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ReportTime))
        {
            return;
        }
        foreach ($dataObjects->ReportTime as $dataObject)
        {
            self::OutputReportTime($dataObject);
        }
    }
    static function OutputSearchCampaignChangeHistoryReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSearchCampaignChangeHistoryReportFilter * * *");
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("HowChanged: %s", $dataObject->HowChanged));
            self::OutputStatusMessage(sprintf("ItemChanged: %s", $dataObject->ItemChanged));
            self::OutputStatusMessage("* * * End OutputSearchCampaignChangeHistoryReportFilter * * *");
        }
    }
    static function OutputArrayOfSearchCampaignChangeHistoryReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchCampaignChangeHistoryReportFilter))
        {
            return;
        }
        foreach ($dataObjects->SearchCampaignChangeHistoryReportFilter as $dataObject)
        {
            self::OutputSearchCampaignChangeHistoryReportFilter($dataObject);
        }
    }
    static function OutputSearchCampaignChangeHistoryReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSearchCampaignChangeHistoryReportRequest * * *");
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfSearchCampaignChangeHistoryReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputSearchCampaignChangeHistoryReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputSearchCampaignChangeHistoryReportRequest * * *");
        }
    }
    static function OutputArrayOfSearchCampaignChangeHistoryReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchCampaignChangeHistoryReportRequest))
        {
            return;
        }
        foreach ($dataObjects->SearchCampaignChangeHistoryReportRequest as $dataObject)
        {
            self::OutputSearchCampaignChangeHistoryReportRequest($dataObject);
        }
    }
    static function OutputSearchQueryPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSearchQueryPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("AdType: %s", $dataObject->AdType));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeliveredMatchType: %s", $dataObject->DeliveredMatchType));
            self::OutputStatusMessage(sprintf("ExcludeZeroClicks: %s", $dataObject->ExcludeZeroClicks));
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("SearchQueries:");
            self::OutputArrayOfString($dataObject->SearchQueries);
            self::OutputStatusMessage("* * * End OutputSearchQueryPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfSearchQueryPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchQueryPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->SearchQueryPerformanceReportFilter as $dataObject)
        {
            self::OutputSearchQueryPerformanceReportFilter($dataObject);
        }
    }
    static function OutputSearchQueryPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSearchQueryPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfSearchQueryPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputSearchQueryPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputSearchQueryPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfSearchQueryPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchQueryPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->SearchQueryPerformanceReportRequest as $dataObject)
        {
            self::OutputSearchQueryPerformanceReportRequest($dataObject);
        }
    }
    static function OutputShareOfVoiceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputShareOfVoiceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("BidMatchType: %s", $dataObject->BidMatchType));
            self::OutputStatusMessage(sprintf("BidStrategyType: %s", $dataObject->BidStrategyType));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeliveredMatchType: %s", $dataObject->DeliveredMatchType));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
            self::OutputStatusMessage("Keywords:");
            self::OutputArrayOfString($dataObject->Keywords);
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputShareOfVoiceReportFilter * * *");
        }
    }
    static function OutputArrayOfShareOfVoiceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ShareOfVoiceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->ShareOfVoiceReportFilter as $dataObject)
        {
            self::OutputShareOfVoiceReportFilter($dataObject);
        }
    }
    static function OutputShareOfVoiceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputShareOfVoiceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfShareOfVoiceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputShareOfVoiceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputShareOfVoiceReportRequest * * *");
        }
    }
    static function OutputArrayOfShareOfVoiceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ShareOfVoiceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->ShareOfVoiceReportRequest as $dataObject)
        {
            self::OutputShareOfVoiceReportRequest($dataObject);
        }
    }
    static function OutputUserLocationPerformanceReportFilter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputUserLocationPerformanceReportFilter * * *");
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage("CountryCode:");
            self::OutputArrayOfString($dataObject->CountryCode);
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputUserLocationPerformanceReportFilter * * *");
        }
    }
    static function OutputArrayOfUserLocationPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UserLocationPerformanceReportFilter))
        {
            return;
        }
        foreach ($dataObjects->UserLocationPerformanceReportFilter as $dataObject)
        {
            self::OutputUserLocationPerformanceReportFilter($dataObject);
        }
    }
    static function OutputUserLocationPerformanceReportRequest($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputUserLocationPerformanceReportRequest * * *");
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputStatusMessage("Columns:");
            self::OutputArrayOfUserLocationPerformanceReportColumn($dataObject->Columns);
            self::OutputStatusMessage("Filter:");
            self::OutputUserLocationPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage("Scope:");
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputStatusMessage("Time:");
            self::OutputReportTime($dataObject->Time);
            self::OutputStatusMessage("* * * End OutputUserLocationPerformanceReportRequest * * *");
        }
    }
    static function OutputArrayOfUserLocationPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UserLocationPerformanceReportRequest))
        {
            return;
        }
        foreach ($dataObjects->UserLocationPerformanceReportRequest as $dataObject)
        {
            self::OutputUserLocationPerformanceReportRequest($dataObject);
        }
    }
    static function OutputReportFormat($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputReportFormat * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputReportFormat * * *");
    }
    static function OutputArrayOfReportFormat($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfReportFormat * * *");
        foreach ($valueSets->ReportFormat as $valueSet)
        {
            self::OutputReportFormat($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfReportFormat * * *");
    }
    static function OutputReportAggregation($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputReportAggregation * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputReportAggregation * * *");
    }
    static function OutputArrayOfReportAggregation($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfReportAggregation * * *");
        foreach ($valueSets->ReportAggregation as $valueSet)
        {
            self::OutputReportAggregation($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfReportAggregation * * *");
    }
    static function OutputAccountPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAccountPerformanceReportColumn * * *");
    }
    static function OutputArrayOfAccountPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountPerformanceReportColumn * * *");
        foreach ($valueSets->AccountPerformanceReportColumn as $valueSet)
        {
            self::OutputAccountPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountPerformanceReportColumn * * *");
    }
    static function OutputAccountStatusReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountStatusReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAccountStatusReportFilter * * *");
    }
    static function OutputArrayOfAccountStatusReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountStatusReportFilter * * *");
        foreach ($valueSets->AccountStatusReportFilter as $valueSet)
        {
            self::OutputAccountStatusReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountStatusReportFilter * * *");
    }
    static function OutputAdDistributionReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdDistributionReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdDistributionReportFilter * * *");
    }
    static function OutputArrayOfAdDistributionReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdDistributionReportFilter * * *");
        foreach ($valueSets->AdDistributionReportFilter as $valueSet)
        {
            self::OutputAdDistributionReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdDistributionReportFilter * * *");
    }
    static function OutputDeviceOSReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDeviceOSReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDeviceOSReportFilter * * *");
    }
    static function OutputArrayOfDeviceOSReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDeviceOSReportFilter * * *");
        foreach ($valueSets->DeviceOSReportFilter as $valueSet)
        {
            self::OutputDeviceOSReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDeviceOSReportFilter * * *");
    }
    static function OutputDeviceTypeReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDeviceTypeReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDeviceTypeReportFilter * * *");
    }
    static function OutputArrayOfDeviceTypeReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDeviceTypeReportFilter * * *");
        foreach ($valueSets->DeviceTypeReportFilter as $valueSet)
        {
            self::OutputDeviceTypeReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDeviceTypeReportFilter * * *");
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
    static function OutputReportTimeZone($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputReportTimeZone * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputReportTimeZone * * *");
    }
    static function OutputArrayOfReportTimeZone($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfReportTimeZone * * *");
        foreach ($valueSets->ReportTimeZone as $valueSet)
        {
            self::OutputReportTimeZone($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfReportTimeZone * * *");
    }
    static function OutputCampaignPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCampaignPerformanceReportColumn * * *");
    }
    static function OutputArrayOfCampaignPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignPerformanceReportColumn * * *");
        foreach ($valueSets->CampaignPerformanceReportColumn as $valueSet)
        {
            self::OutputCampaignPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignPerformanceReportColumn * * *");
    }
    static function OutputCampaignStatusReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignStatusReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCampaignStatusReportFilter * * *");
    }
    static function OutputArrayOfCampaignStatusReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignStatusReportFilter * * *");
        foreach ($valueSets->CampaignStatusReportFilter as $valueSet)
        {
            self::OutputCampaignStatusReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignStatusReportFilter * * *");
    }
    static function OutputAdDynamicTextPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdDynamicTextPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdDynamicTextPerformanceReportColumn * * *");
    }
    static function OutputArrayOfAdDynamicTextPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdDynamicTextPerformanceReportColumn * * *");
        foreach ($valueSets->AdDynamicTextPerformanceReportColumn as $valueSet)
        {
            self::OutputAdDynamicTextPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdDynamicTextPerformanceReportColumn * * *");
    }
    static function OutputAdGroupStatusReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupStatusReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupStatusReportFilter * * *");
    }
    static function OutputArrayOfAdGroupStatusReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupStatusReportFilter * * *");
        foreach ($valueSets->AdGroupStatusReportFilter as $valueSet)
        {
            self::OutputAdGroupStatusReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupStatusReportFilter * * *");
    }
    static function OutputAdStatusReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdStatusReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdStatusReportFilter * * *");
    }
    static function OutputArrayOfAdStatusReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdStatusReportFilter * * *");
        foreach ($valueSets->AdStatusReportFilter as $valueSet)
        {
            self::OutputAdStatusReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdStatusReportFilter * * *");
    }
    static function OutputAdTypeReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdTypeReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdTypeReportFilter * * *");
    }
    static function OutputArrayOfAdTypeReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdTypeReportFilter * * *");
        foreach ($valueSets->AdTypeReportFilter as $valueSet)
        {
            self::OutputAdTypeReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdTypeReportFilter * * *");
    }
    static function OutputKeywordStatusReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordStatusReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputKeywordStatusReportFilter * * *");
    }
    static function OutputArrayOfKeywordStatusReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordStatusReportFilter * * *");
        foreach ($valueSets->KeywordStatusReportFilter as $valueSet)
        {
            self::OutputKeywordStatusReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordStatusReportFilter * * *");
    }
    static function OutputLanguageReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputLanguageReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputLanguageReportFilter * * *");
    }
    static function OutputArrayOfLanguageReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLanguageReportFilter * * *");
        foreach ($valueSets->LanguageReportFilter as $valueSet)
        {
            self::OutputLanguageReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLanguageReportFilter * * *");
    }
    static function OutputAdGroupPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupPerformanceReportColumn * * *");
    }
    static function OutputArrayOfAdGroupPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupPerformanceReportColumn * * *");
        foreach ($valueSets->AdGroupPerformanceReportColumn as $valueSet)
        {
            self::OutputAdGroupPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupPerformanceReportColumn * * *");
    }
    static function OutputAdPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdPerformanceReportColumn * * *");
    }
    static function OutputArrayOfAdPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdPerformanceReportColumn * * *");
        foreach ($valueSets->AdPerformanceReportColumn as $valueSet)
        {
            self::OutputAdPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdPerformanceReportColumn * * *");
    }
    static function OutputKeywordPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputKeywordPerformanceReportColumn * * *");
    }
    static function OutputArrayOfKeywordPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordPerformanceReportColumn * * *");
        foreach ($valueSets->KeywordPerformanceReportColumn as $valueSet)
        {
            self::OutputKeywordPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordPerformanceReportColumn * * *");
    }
    static function OutputBidMatchTypeReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputBidMatchTypeReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputBidMatchTypeReportFilter * * *");
    }
    static function OutputArrayOfBidMatchTypeReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBidMatchTypeReportFilter * * *");
        foreach ($valueSets->BidMatchTypeReportFilter as $valueSet)
        {
            self::OutputBidMatchTypeReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBidMatchTypeReportFilter * * *");
    }
    static function OutputBidStrategyTypeReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputBidStrategyTypeReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputBidStrategyTypeReportFilter * * *");
    }
    static function OutputArrayOfBidStrategyTypeReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBidStrategyTypeReportFilter * * *");
        foreach ($valueSets->BidStrategyTypeReportFilter as $valueSet)
        {
            self::OutputBidStrategyTypeReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBidStrategyTypeReportFilter * * *");
    }
    static function OutputDeliveredMatchTypeReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDeliveredMatchTypeReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDeliveredMatchTypeReportFilter * * *");
    }
    static function OutputArrayOfDeliveredMatchTypeReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDeliveredMatchTypeReportFilter * * *");
        foreach ($valueSets->DeliveredMatchTypeReportFilter as $valueSet)
        {
            self::OutputDeliveredMatchTypeReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDeliveredMatchTypeReportFilter * * *");
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
    static function OutputDestinationUrlPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDestinationUrlPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDestinationUrlPerformanceReportColumn * * *");
    }
    static function OutputArrayOfDestinationUrlPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDestinationUrlPerformanceReportColumn * * *");
        foreach ($valueSets->DestinationUrlPerformanceReportColumn as $valueSet)
        {
            self::OutputDestinationUrlPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDestinationUrlPerformanceReportColumn * * *");
    }
    static function OutputBudgetSummaryReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputBudgetSummaryReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputBudgetSummaryReportColumn * * *");
    }
    static function OutputArrayOfBudgetSummaryReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBudgetSummaryReportColumn * * *");
        foreach ($valueSets->BudgetSummaryReportColumn as $valueSet)
        {
            self::OutputBudgetSummaryReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBudgetSummaryReportColumn * * *");
    }
    static function OutputAgeGenderAudienceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAgeGenderAudienceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAgeGenderAudienceReportColumn * * *");
    }
    static function OutputArrayOfAgeGenderAudienceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAgeGenderAudienceReportColumn * * *");
        foreach ($valueSets->AgeGenderAudienceReportColumn as $valueSet)
        {
            self::OutputAgeGenderAudienceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAgeGenderAudienceReportColumn * * *");
    }
    static function OutputProfessionalDemographicsAudienceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputProfessionalDemographicsAudienceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputProfessionalDemographicsAudienceReportColumn * * *");
    }
    static function OutputArrayOfProfessionalDemographicsAudienceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProfessionalDemographicsAudienceReportColumn * * *");
        foreach ($valueSets->ProfessionalDemographicsAudienceReportColumn as $valueSet)
        {
            self::OutputProfessionalDemographicsAudienceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProfessionalDemographicsAudienceReportColumn * * *");
    }
    static function OutputUserLocationPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputUserLocationPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputUserLocationPerformanceReportColumn * * *");
    }
    static function OutputArrayOfUserLocationPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfUserLocationPerformanceReportColumn * * *");
        foreach ($valueSets->UserLocationPerformanceReportColumn as $valueSet)
        {
            self::OutputUserLocationPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfUserLocationPerformanceReportColumn * * *");
    }
    static function OutputPublisherUsagePerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputPublisherUsagePerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputPublisherUsagePerformanceReportColumn * * *");
    }
    static function OutputArrayOfPublisherUsagePerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPublisherUsagePerformanceReportColumn * * *");
        foreach ($valueSets->PublisherUsagePerformanceReportColumn as $valueSet)
        {
            self::OutputPublisherUsagePerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPublisherUsagePerformanceReportColumn * * *");
    }
    static function OutputSearchQueryPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputSearchQueryPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputSearchQueryPerformanceReportColumn * * *");
    }
    static function OutputArrayOfSearchQueryPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSearchQueryPerformanceReportColumn * * *");
        foreach ($valueSets->SearchQueryPerformanceReportColumn as $valueSet)
        {
            self::OutputSearchQueryPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSearchQueryPerformanceReportColumn * * *");
    }
    static function OutputConversionPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputConversionPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputConversionPerformanceReportColumn * * *");
    }
    static function OutputArrayOfConversionPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfConversionPerformanceReportColumn * * *");
        foreach ($valueSets->ConversionPerformanceReportColumn as $valueSet)
        {
            self::OutputConversionPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfConversionPerformanceReportColumn * * *");
    }
    static function OutputGoalsAndFunnelsReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputGoalsAndFunnelsReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputGoalsAndFunnelsReportColumn * * *");
    }
    static function OutputArrayOfGoalsAndFunnelsReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfGoalsAndFunnelsReportColumn * * *");
        foreach ($valueSets->GoalsAndFunnelsReportColumn as $valueSet)
        {
            self::OutputGoalsAndFunnelsReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfGoalsAndFunnelsReportColumn * * *");
    }
    static function OutputNegativeKeywordConflictReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputNegativeKeywordConflictReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputNegativeKeywordConflictReportColumn * * *");
    }
    static function OutputArrayOfNegativeKeywordConflictReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNegativeKeywordConflictReportColumn * * *");
        foreach ($valueSets->NegativeKeywordConflictReportColumn as $valueSet)
        {
            self::OutputNegativeKeywordConflictReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNegativeKeywordConflictReportColumn * * *");
    }
    static function OutputSearchCampaignChangeHistoryReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputSearchCampaignChangeHistoryReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputSearchCampaignChangeHistoryReportColumn * * *");
    }
    static function OutputArrayOfSearchCampaignChangeHistoryReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSearchCampaignChangeHistoryReportColumn * * *");
        foreach ($valueSets->SearchCampaignChangeHistoryReportColumn as $valueSet)
        {
            self::OutputSearchCampaignChangeHistoryReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSearchCampaignChangeHistoryReportColumn * * *");
    }
    static function OutputChangeTypeReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputChangeTypeReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputChangeTypeReportFilter * * *");
    }
    static function OutputArrayOfChangeTypeReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfChangeTypeReportFilter * * *");
        foreach ($valueSets->ChangeTypeReportFilter as $valueSet)
        {
            self::OutputChangeTypeReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfChangeTypeReportFilter * * *");
    }
    static function OutputChangeEntityReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputChangeEntityReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputChangeEntityReportFilter * * *");
    }
    static function OutputArrayOfChangeEntityReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfChangeEntityReportFilter * * *");
        foreach ($valueSets->ChangeEntityReportFilter as $valueSet)
        {
            self::OutputChangeEntityReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfChangeEntityReportFilter * * *");
    }
    static function OutputAdExtensionByAdReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionByAdReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionByAdReportColumn * * *");
    }
    static function OutputArrayOfAdExtensionByAdReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionByAdReportColumn * * *");
        foreach ($valueSets->AdExtensionByAdReportColumn as $valueSet)
        {
            self::OutputAdExtensionByAdReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionByAdReportColumn * * *");
    }
    static function OutputAdExtensionByKeywordReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionByKeywordReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionByKeywordReportColumn * * *");
    }
    static function OutputArrayOfAdExtensionByKeywordReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionByKeywordReportColumn * * *");
        foreach ($valueSets->AdExtensionByKeywordReportColumn as $valueSet)
        {
            self::OutputAdExtensionByKeywordReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionByKeywordReportColumn * * *");
    }
    static function OutputAudiencePerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAudiencePerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAudiencePerformanceReportColumn * * *");
    }
    static function OutputArrayOfAudiencePerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAudiencePerformanceReportColumn * * *");
        foreach ($valueSets->AudiencePerformanceReportColumn as $valueSet)
        {
            self::OutputAudiencePerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAudiencePerformanceReportColumn * * *");
    }
    static function OutputAdExtensionDetailReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionDetailReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionDetailReportColumn * * *");
    }
    static function OutputArrayOfAdExtensionDetailReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionDetailReportColumn * * *");
        foreach ($valueSets->AdExtensionDetailReportColumn as $valueSet)
        {
            self::OutputAdExtensionDetailReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionDetailReportColumn * * *");
    }
    static function OutputShareOfVoiceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputShareOfVoiceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputShareOfVoiceReportColumn * * *");
    }
    static function OutputArrayOfShareOfVoiceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfShareOfVoiceReportColumn * * *");
        foreach ($valueSets->ShareOfVoiceReportColumn as $valueSet)
        {
            self::OutputShareOfVoiceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfShareOfVoiceReportColumn * * *");
    }
    static function OutputProductDimensionPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputProductDimensionPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputProductDimensionPerformanceReportColumn * * *");
    }
    static function OutputArrayOfProductDimensionPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductDimensionPerformanceReportColumn * * *");
        foreach ($valueSets->ProductDimensionPerformanceReportColumn as $valueSet)
        {
            self::OutputProductDimensionPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductDimensionPerformanceReportColumn * * *");
    }
    static function OutputProductPartitionPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputProductPartitionPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputProductPartitionPerformanceReportColumn * * *");
    }
    static function OutputArrayOfProductPartitionPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductPartitionPerformanceReportColumn * * *");
        foreach ($valueSets->ProductPartitionPerformanceReportColumn as $valueSet)
        {
            self::OutputProductPartitionPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductPartitionPerformanceReportColumn * * *");
    }
    static function OutputProductPartitionUnitPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputProductPartitionUnitPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputProductPartitionUnitPerformanceReportColumn * * *");
    }
    static function OutputArrayOfProductPartitionUnitPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductPartitionUnitPerformanceReportColumn * * *");
        foreach ($valueSets->ProductPartitionUnitPerformanceReportColumn as $valueSet)
        {
            self::OutputProductPartitionUnitPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductPartitionUnitPerformanceReportColumn * * *");
    }
    static function OutputProductSearchQueryPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputProductSearchQueryPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputProductSearchQueryPerformanceReportColumn * * *");
    }
    static function OutputArrayOfProductSearchQueryPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductSearchQueryPerformanceReportColumn * * *");
        foreach ($valueSets->ProductSearchQueryPerformanceReportColumn as $valueSet)
        {
            self::OutputProductSearchQueryPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductSearchQueryPerformanceReportColumn * * *");
    }
    static function OutputProductMatchCountReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputProductMatchCountReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputProductMatchCountReportColumn * * *");
    }
    static function OutputArrayOfProductMatchCountReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductMatchCountReportColumn * * *");
        foreach ($valueSets->ProductMatchCountReportColumn as $valueSet)
        {
            self::OutputProductMatchCountReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductMatchCountReportColumn * * *");
    }
    static function OutputProductNegativeKeywordConflictReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputProductNegativeKeywordConflictReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputProductNegativeKeywordConflictReportColumn * * *");
    }
    static function OutputArrayOfProductNegativeKeywordConflictReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductNegativeKeywordConflictReportColumn * * *");
        foreach ($valueSets->ProductNegativeKeywordConflictReportColumn as $valueSet)
        {
            self::OutputProductNegativeKeywordConflictReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductNegativeKeywordConflictReportColumn * * *");
    }
    static function OutputCallDetailReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCallDetailReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCallDetailReportColumn * * *");
    }
    static function OutputArrayOfCallDetailReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCallDetailReportColumn * * *");
        foreach ($valueSets->CallDetailReportColumn as $valueSet)
        {
            self::OutputCallDetailReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCallDetailReportColumn * * *");
    }
    static function OutputGeographicPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputGeographicPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputGeographicPerformanceReportColumn * * *");
    }
    static function OutputArrayOfGeographicPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfGeographicPerformanceReportColumn * * *");
        foreach ($valueSets->GeographicPerformanceReportColumn as $valueSet)
        {
            self::OutputGeographicPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfGeographicPerformanceReportColumn * * *");
    }
    static function OutputDSASearchQueryPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDSASearchQueryPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDSASearchQueryPerformanceReportColumn * * *");
    }
    static function OutputArrayOfDSASearchQueryPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDSASearchQueryPerformanceReportColumn * * *");
        foreach ($valueSets->DSASearchQueryPerformanceReportColumn as $valueSet)
        {
            self::OutputDSASearchQueryPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDSASearchQueryPerformanceReportColumn * * *");
    }
    static function OutputDSAAutoTargetPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDSAAutoTargetPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDSAAutoTargetPerformanceReportColumn * * *");
    }
    static function OutputArrayOfDSAAutoTargetPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDSAAutoTargetPerformanceReportColumn * * *");
        foreach ($valueSets->DSAAutoTargetPerformanceReportColumn as $valueSet)
        {
            self::OutputDSAAutoTargetPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDSAAutoTargetPerformanceReportColumn * * *");
    }
    static function OutputDynamicAdTargetStatusReportFilter($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDynamicAdTargetStatusReportFilter * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDynamicAdTargetStatusReportFilter * * *");
    }
    static function OutputArrayOfDynamicAdTargetStatusReportFilter($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDynamicAdTargetStatusReportFilter * * *");
        foreach ($valueSets->DynamicAdTargetStatusReportFilter as $valueSet)
        {
            self::OutputDynamicAdTargetStatusReportFilter($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDynamicAdTargetStatusReportFilter * * *");
    }
    static function OutputDSACategoryPerformanceReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputDSACategoryPerformanceReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputDSACategoryPerformanceReportColumn * * *");
    }
    static function OutputArrayOfDSACategoryPerformanceReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDSACategoryPerformanceReportColumn * * *");
        foreach ($valueSets->DSACategoryPerformanceReportColumn as $valueSet)
        {
            self::OutputDSACategoryPerformanceReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDSACategoryPerformanceReportColumn * * *");
    }
    static function OutputReportRequestStatusType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputReportRequestStatusType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputReportRequestStatusType * * *");
    }
    static function OutputArrayOfReportRequestStatusType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfReportRequestStatusType * * *");
        foreach ($valueSets->ReportRequestStatusType as $valueSet)
        {
            self::OutputReportRequestStatusType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfReportRequestStatusType * * *");
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
