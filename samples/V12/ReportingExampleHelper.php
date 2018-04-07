<?php

namespace Microsoft\BingAds\Samples\V12;

require_once "/../vendor/autoload.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\Reporting classes that will be used.
use Microsoft\BingAds\V12\Reporting\PollGenerateReportRequest;
use Microsoft\BingAds\V12\Reporting\SubmitGenerateReportRequest;

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
        self::OutputStatusMessage("* * * Begin OutputAccountPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
        }
        self::OutputStatusMessage("* * * End OutputAccountPerformanceReportFilter * * *");
    }
    static function OutputArrayOfAccountPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountPerformanceReportFilter * * *");
        foreach ($dataObjects->AccountPerformanceReportFilter as $dataObject)
        {
            self::OutputAccountPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountPerformanceReportFilter * * *");
    }
    static function OutputAccountPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfAccountPerformanceReportColumn($dataObject->Columns);
            self::OutputAccountPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputAccountPerformanceReportRequest * * *");
    }
    static function OutputArrayOfAccountPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountPerformanceReportRequest * * *");
        foreach ($dataObjects->AccountPerformanceReportRequest as $dataObject)
        {
            self::OutputAccountPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountPerformanceReportRequest * * *");
    }
    static function OutputAccountReportScope($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountReportScope * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfLong($dataObject->AccountIds);
        }
        self::OutputStatusMessage("* * * End OutputAccountReportScope * * *");
    }
    static function OutputArrayOfAccountReportScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountReportScope))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountReportScope * * *");
        foreach ($dataObjects->AccountReportScope as $dataObject)
        {
            self::OutputAccountReportScope($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountReportScope * * *");
    }
    static function OutputAccountThroughAdGroupReportScope($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountThroughAdGroupReportScope * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfLong($dataObject->AccountIds);
            self::OutputArrayOfAdGroupReportScope($dataObject->AdGroups);
            self::OutputArrayOfCampaignReportScope($dataObject->Campaigns);
        }
        self::OutputStatusMessage("* * * End OutputAccountThroughAdGroupReportScope * * *");
    }
    static function OutputArrayOfAccountThroughAdGroupReportScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountThroughAdGroupReportScope))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountThroughAdGroupReportScope * * *");
        foreach ($dataObjects->AccountThroughAdGroupReportScope as $dataObject)
        {
            self::OutputAccountThroughAdGroupReportScope($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountThroughAdGroupReportScope * * *");
    }
    static function OutputAccountThroughCampaignReportScope($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAccountThroughCampaignReportScope * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfLong($dataObject->AccountIds);
            self::OutputArrayOfCampaignReportScope($dataObject->Campaigns);
        }
        self::OutputStatusMessage("* * * End OutputAccountThroughCampaignReportScope * * *");
    }
    static function OutputArrayOfAccountThroughCampaignReportScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AccountThroughCampaignReportScope))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAccountThroughCampaignReportScope * * *");
        foreach ($dataObjects->AccountThroughCampaignReportScope as $dataObject)
        {
            self::OutputAccountThroughCampaignReportScope($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAccountThroughCampaignReportScope * * *");
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
    static function OutputAdDynamicTextPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdDynamicTextPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("AdType: %s", $dataObject->AdType));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputAdDynamicTextPerformanceReportFilter * * *");
    }
    static function OutputArrayOfAdDynamicTextPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdDynamicTextPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdDynamicTextPerformanceReportFilter * * *");
        foreach ($dataObjects->AdDynamicTextPerformanceReportFilter as $dataObject)
        {
            self::OutputAdDynamicTextPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdDynamicTextPerformanceReportFilter * * *");
    }
    static function OutputAdDynamicTextPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdDynamicTextPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfAdDynamicTextPerformanceReportColumn($dataObject->Columns);
            self::OutputAdDynamicTextPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputAdDynamicTextPerformanceReportRequest * * *");
    }
    static function OutputArrayOfAdDynamicTextPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdDynamicTextPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdDynamicTextPerformanceReportRequest * * *");
        foreach ($dataObjects->AdDynamicTextPerformanceReportRequest as $dataObject)
        {
            self::OutputAdDynamicTextPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdDynamicTextPerformanceReportRequest * * *");
    }
    static function OutputAdExtensionByAdReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionByAdReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionByAdReportFilter * * *");
    }
    static function OutputArrayOfAdExtensionByAdReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionByAdReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionByAdReportFilter * * *");
        foreach ($dataObjects->AdExtensionByAdReportFilter as $dataObject)
        {
            self::OutputAdExtensionByAdReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionByAdReportFilter * * *");
    }
    static function OutputAdExtensionByAdReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionByAdReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfAdExtensionByAdReportColumn($dataObject->Columns);
            self::OutputAdExtensionByAdReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionByAdReportRequest * * *");
    }
    static function OutputArrayOfAdExtensionByAdReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionByAdReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionByAdReportRequest * * *");
        foreach ($dataObjects->AdExtensionByAdReportRequest as $dataObject)
        {
            self::OutputAdExtensionByAdReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionByAdReportRequest * * *");
    }
    static function OutputAdExtensionByKeywordReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionByKeywordReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionByKeywordReportFilter * * *");
    }
    static function OutputArrayOfAdExtensionByKeywordReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionByKeywordReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionByKeywordReportFilter * * *");
        foreach ($dataObjects->AdExtensionByKeywordReportFilter as $dataObject)
        {
            self::OutputAdExtensionByKeywordReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionByKeywordReportFilter * * *");
    }
    static function OutputAdExtensionByKeywordReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionByKeywordReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfAdExtensionByKeywordReportColumn($dataObject->Columns);
            self::OutputAdExtensionByKeywordReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionByKeywordReportRequest * * *");
    }
    static function OutputArrayOfAdExtensionByKeywordReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionByKeywordReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionByKeywordReportRequest * * *");
        foreach ($dataObjects->AdExtensionByKeywordReportRequest as $dataObject)
        {
            self::OutputAdExtensionByKeywordReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionByKeywordReportRequest * * *");
    }
    static function OutputAdExtensionDetailReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionDetailReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionDetailReportFilter * * *");
    }
    static function OutputArrayOfAdExtensionDetailReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionDetailReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionDetailReportFilter * * *");
        foreach ($dataObjects->AdExtensionDetailReportFilter as $dataObject)
        {
            self::OutputAdExtensionDetailReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionDetailReportFilter * * *");
    }
    static function OutputAdExtensionDetailReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdExtensionDetailReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfAdExtensionDetailReportColumn($dataObject->Columns);
            self::OutputAdExtensionDetailReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputAdExtensionDetailReportRequest * * *");
    }
    static function OutputArrayOfAdExtensionDetailReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdExtensionDetailReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdExtensionDetailReportRequest * * *");
        foreach ($dataObjects->AdExtensionDetailReportRequest as $dataObject)
        {
            self::OutputAdExtensionDetailReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdExtensionDetailReportRequest * * *");
    }
    static function OutputAdGroupPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputArrayOfString($dataObject->LanguageCode);
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
        }
        self::OutputStatusMessage("* * * End OutputAdGroupPerformanceReportFilter * * *");
    }
    static function OutputArrayOfAdGroupPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupPerformanceReportFilter * * *");
        foreach ($dataObjects->AdGroupPerformanceReportFilter as $dataObject)
        {
            self::OutputAdGroupPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupPerformanceReportFilter * * *");
    }
    static function OutputAdGroupPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfAdGroupPerformanceReportColumn($dataObject->Columns);
            self::OutputAdGroupPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupPerformanceReportRequest * * *");
    }
    static function OutputArrayOfAdGroupPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupPerformanceReportRequest * * *");
        foreach ($dataObjects->AdGroupPerformanceReportRequest as $dataObject)
        {
            self::OutputAdGroupPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupPerformanceReportRequest * * *");
    }
    static function OutputAdGroupReportScope($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupReportScope * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
        }
        self::OutputStatusMessage("* * * End OutputAdGroupReportScope * * *");
    }
    static function OutputArrayOfAdGroupReportScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupReportScope))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupReportScope * * *");
        foreach ($dataObjects->AdGroupReportScope as $dataObject)
        {
            self::OutputAdGroupReportScope($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupReportScope * * *");
    }
    static function OutputAdPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("AdType: %s", $dataObject->AdType));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputAdPerformanceReportFilter * * *");
    }
    static function OutputArrayOfAdPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdPerformanceReportFilter * * *");
        foreach ($dataObjects->AdPerformanceReportFilter as $dataObject)
        {
            self::OutputAdPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdPerformanceReportFilter * * *");
    }
    static function OutputAdPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfAdPerformanceReportColumn($dataObject->Columns);
            self::OutputAdPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputAdPerformanceReportRequest * * *");
    }
    static function OutputArrayOfAdPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdPerformanceReportRequest * * *");
        foreach ($dataObjects->AdPerformanceReportRequest as $dataObject)
        {
            self::OutputAdPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdPerformanceReportRequest * * *");
    }
    static function OutputAgeGenderAudienceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAgeGenderAudienceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputAgeGenderAudienceReportFilter * * *");
    }
    static function OutputArrayOfAgeGenderAudienceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AgeGenderAudienceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAgeGenderAudienceReportFilter * * *");
        foreach ($dataObjects->AgeGenderAudienceReportFilter as $dataObject)
        {
            self::OutputAgeGenderAudienceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAgeGenderAudienceReportFilter * * *");
    }
    static function OutputAgeGenderAudienceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAgeGenderAudienceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfAgeGenderAudienceReportColumn($dataObject->Columns);
            self::OutputAgeGenderAudienceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputAgeGenderAudienceReportRequest * * *");
    }
    static function OutputArrayOfAgeGenderAudienceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AgeGenderAudienceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAgeGenderAudienceReportRequest * * *");
        foreach ($dataObjects->AgeGenderAudienceReportRequest as $dataObject)
        {
            self::OutputAgeGenderAudienceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAgeGenderAudienceReportRequest * * *");
    }
    static function OutputAgeGenderDemographicReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAgeGenderDemographicReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputAgeGenderDemographicReportFilter * * *");
    }
    static function OutputArrayOfAgeGenderDemographicReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AgeGenderDemographicReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAgeGenderDemographicReportFilter * * *");
        foreach ($dataObjects->AgeGenderDemographicReportFilter as $dataObject)
        {
            self::OutputAgeGenderDemographicReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAgeGenderDemographicReportFilter * * *");
    }
    static function OutputAgeGenderDemographicReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAgeGenderDemographicReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfAgeGenderDemographicReportColumn($dataObject->Columns);
            self::OutputAgeGenderDemographicReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputAgeGenderDemographicReportRequest * * *");
    }
    static function OutputArrayOfAgeGenderDemographicReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AgeGenderDemographicReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAgeGenderDemographicReportRequest * * *");
        foreach ($dataObjects->AgeGenderDemographicReportRequest as $dataObject)
        {
            self::OutputAgeGenderDemographicReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAgeGenderDemographicReportRequest * * *");
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
    static function OutputAudiencePerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAudiencePerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
        }
        self::OutputStatusMessage("* * * End OutputAudiencePerformanceReportFilter * * *");
    }
    static function OutputArrayOfAudiencePerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AudiencePerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAudiencePerformanceReportFilter * * *");
        foreach ($dataObjects->AudiencePerformanceReportFilter as $dataObject)
        {
            self::OutputAudiencePerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAudiencePerformanceReportFilter * * *");
    }
    static function OutputAudiencePerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAudiencePerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfAudiencePerformanceReportColumn($dataObject->Columns);
            self::OutputAudiencePerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputAudiencePerformanceReportRequest * * *");
    }
    static function OutputArrayOfAudiencePerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AudiencePerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAudiencePerformanceReportRequest * * *");
        foreach ($dataObjects->AudiencePerformanceReportRequest as $dataObject)
        {
            self::OutputAudiencePerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAudiencePerformanceReportRequest * * *");
    }
    static function OutputBatchError($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBatchError * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Code: %s", $dataObject->Code));
            self::OutputStatusMessage(sprintf("Details: %s", $dataObject->Details));
            self::OutputStatusMessage(sprintf("ErrorCode: %s", $dataObject->ErrorCode));
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
    static function OutputBudgetSummaryReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBudgetSummaryReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfBudgetSummaryReportColumn($dataObject->Columns);
            self::OutputAccountThroughCampaignReportScope($dataObject->Scope);
            self::OutputBudgetSummaryReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputBudgetSummaryReportRequest * * *");
    }
    static function OutputArrayOfBudgetSummaryReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BudgetSummaryReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBudgetSummaryReportRequest * * *");
        foreach ($dataObjects->BudgetSummaryReportRequest as $dataObject)
        {
            self::OutputBudgetSummaryReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBudgetSummaryReportRequest * * *");
    }
    static function OutputBudgetSummaryReportTime($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBudgetSummaryReportTime * * *");
        if (!empty($dataObject))
        {
            self::OutputDate($dataObject->CustomDateRangeEnd);
            self::OutputDate($dataObject->CustomDateRangeStart);
            self::OutputStatusMessage(sprintf("PredefinedTime: %s", $dataObject->PredefinedTime));
            self::OutputStatusMessage(sprintf("ReportTimeZone: %s", $dataObject->ReportTimeZone));
        }
        self::OutputStatusMessage("* * * End OutputBudgetSummaryReportTime * * *");
    }
    static function OutputArrayOfBudgetSummaryReportTime($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BudgetSummaryReportTime))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBudgetSummaryReportTime * * *");
        foreach ($dataObjects->BudgetSummaryReportTime as $dataObject)
        {
            self::OutputBudgetSummaryReportTime($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBudgetSummaryReportTime * * *");
    }
    static function OutputCallDetailReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCallDetailReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
        }
        self::OutputStatusMessage("* * * End OutputCallDetailReportFilter * * *");
    }
    static function OutputArrayOfCallDetailReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CallDetailReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCallDetailReportFilter * * *");
        foreach ($dataObjects->CallDetailReportFilter as $dataObject)
        {
            self::OutputCallDetailReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCallDetailReportFilter * * *");
    }
    static function OutputCallDetailReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCallDetailReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfCallDetailReportColumn($dataObject->Columns);
            self::OutputCallDetailReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputCallDetailReportRequest * * *");
    }
    static function OutputArrayOfCallDetailReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CallDetailReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCallDetailReportRequest * * *");
        foreach ($dataObjects->CallDetailReportRequest as $dataObject)
        {
            self::OutputCallDetailReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCallDetailReportRequest * * *");
    }
    static function OutputCampaignPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
        }
        self::OutputStatusMessage("* * * End OutputCampaignPerformanceReportFilter * * *");
    }
    static function OutputArrayOfCampaignPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignPerformanceReportFilter * * *");
        foreach ($dataObjects->CampaignPerformanceReportFilter as $dataObject)
        {
            self::OutputCampaignPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignPerformanceReportFilter * * *");
    }
    static function OutputCampaignPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfCampaignPerformanceReportColumn($dataObject->Columns);
            self::OutputCampaignPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughCampaignReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputCampaignPerformanceReportRequest * * *");
    }
    static function OutputArrayOfCampaignPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignPerformanceReportRequest * * *");
        foreach ($dataObjects->CampaignPerformanceReportRequest as $dataObject)
        {
            self::OutputCampaignPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignPerformanceReportRequest * * *");
    }
    static function OutputCampaignReportScope($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignReportScope * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountId: %s", $dataObject->AccountId));
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
        }
        self::OutputStatusMessage("* * * End OutputCampaignReportScope * * *");
    }
    static function OutputArrayOfCampaignReportScope($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignReportScope))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignReportScope * * *");
        foreach ($dataObjects->CampaignReportScope as $dataObject)
        {
            self::OutputCampaignReportScope($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignReportScope * * *");
    }
    static function OutputConversionPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputConversionPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
            self::OutputArrayOfString($dataObject->Keywords);
        }
        self::OutputStatusMessage("* * * End OutputConversionPerformanceReportFilter * * *");
    }
    static function OutputArrayOfConversionPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ConversionPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfConversionPerformanceReportFilter * * *");
        foreach ($dataObjects->ConversionPerformanceReportFilter as $dataObject)
        {
            self::OutputConversionPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfConversionPerformanceReportFilter * * *");
    }
    static function OutputConversionPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputConversionPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfConversionPerformanceReportColumn($dataObject->Columns);
            self::OutputConversionPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputConversionPerformanceReportRequest * * *");
    }
    static function OutputArrayOfConversionPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ConversionPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfConversionPerformanceReportRequest * * *");
        foreach ($dataObjects->ConversionPerformanceReportRequest as $dataObject)
        {
            self::OutputConversionPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfConversionPerformanceReportRequest * * *");
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
    static function OutputDestinationUrlPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDestinationUrlPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputDestinationUrlPerformanceReportFilter * * *");
    }
    static function OutputArrayOfDestinationUrlPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DestinationUrlPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDestinationUrlPerformanceReportFilter * * *");
        foreach ($dataObjects->DestinationUrlPerformanceReportFilter as $dataObject)
        {
            self::OutputDestinationUrlPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDestinationUrlPerformanceReportFilter * * *");
    }
    static function OutputDestinationUrlPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDestinationUrlPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfDestinationUrlPerformanceReportColumn($dataObject->Columns);
            self::OutputDestinationUrlPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputDestinationUrlPerformanceReportRequest * * *");
    }
    static function OutputArrayOfDestinationUrlPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DestinationUrlPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDestinationUrlPerformanceReportRequest * * *");
        foreach ($dataObjects->DestinationUrlPerformanceReportRequest as $dataObject)
        {
            self::OutputDestinationUrlPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDestinationUrlPerformanceReportRequest * * *");
    }
    static function OutputDSAAutoTargetPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDSAAutoTargetPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("BidStrategyType: %s", $dataObject->BidStrategyType));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DynamicAdTargetStatus: %s", $dataObject->DynamicAdTargetStatus));
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputDSAAutoTargetPerformanceReportFilter * * *");
    }
    static function OutputArrayOfDSAAutoTargetPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DSAAutoTargetPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDSAAutoTargetPerformanceReportFilter * * *");
        foreach ($dataObjects->DSAAutoTargetPerformanceReportFilter as $dataObject)
        {
            self::OutputDSAAutoTargetPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDSAAutoTargetPerformanceReportFilter * * *");
    }
    static function OutputDSAAutoTargetPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDSAAutoTargetPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfDSAAutoTargetPerformanceReportColumn($dataObject->Columns);
            self::OutputDSAAutoTargetPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputDSAAutoTargetPerformanceReportRequest * * *");
    }
    static function OutputArrayOfDSAAutoTargetPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DSAAutoTargetPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDSAAutoTargetPerformanceReportRequest * * *");
        foreach ($dataObjects->DSAAutoTargetPerformanceReportRequest as $dataObject)
        {
            self::OutputDSAAutoTargetPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDSAAutoTargetPerformanceReportRequest * * *");
    }
    static function OutputDSACategoryPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDSACategoryPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputDSACategoryPerformanceReportFilter * * *");
    }
    static function OutputArrayOfDSACategoryPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DSACategoryPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDSACategoryPerformanceReportFilter * * *");
        foreach ($dataObjects->DSACategoryPerformanceReportFilter as $dataObject)
        {
            self::OutputDSACategoryPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDSACategoryPerformanceReportFilter * * *");
    }
    static function OutputDSACategoryPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDSACategoryPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfDSACategoryPerformanceReportColumn($dataObject->Columns);
            self::OutputDSACategoryPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputDSACategoryPerformanceReportRequest * * *");
    }
    static function OutputArrayOfDSACategoryPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DSACategoryPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDSACategoryPerformanceReportRequest * * *");
        foreach ($dataObjects->DSACategoryPerformanceReportRequest as $dataObject)
        {
            self::OutputDSACategoryPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDSACategoryPerformanceReportRequest * * *");
    }
    static function OutputDSASearchQueryPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDSASearchQueryPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("ExcludeZeroClicks: %s", $dataObject->ExcludeZeroClicks));
            self::OutputArrayOfString($dataObject->LanguageCode);
            self::OutputArrayOfString($dataObject->SearchQueries);
        }
        self::OutputStatusMessage("* * * End OutputDSASearchQueryPerformanceReportFilter * * *");
    }
    static function OutputArrayOfDSASearchQueryPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DSASearchQueryPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDSASearchQueryPerformanceReportFilter * * *");
        foreach ($dataObjects->DSASearchQueryPerformanceReportFilter as $dataObject)
        {
            self::OutputDSASearchQueryPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDSASearchQueryPerformanceReportFilter * * *");
    }
    static function OutputDSASearchQueryPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDSASearchQueryPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfDSASearchQueryPerformanceReportColumn($dataObject->Columns);
            self::OutputDSASearchQueryPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputDSASearchQueryPerformanceReportRequest * * *");
    }
    static function OutputArrayOfDSASearchQueryPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DSASearchQueryPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDSASearchQueryPerformanceReportRequest * * *");
        foreach ($dataObjects->DSASearchQueryPerformanceReportRequest as $dataObject)
        {
            self::OutputDSASearchQueryPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDSASearchQueryPerformanceReportRequest * * *");
    }
    static function OutputGeographicPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputGeographicPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputArrayOfString($dataObject->CountryCode);
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputGeographicPerformanceReportFilter * * *");
    }
    static function OutputArrayOfGeographicPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GeographicPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfGeographicPerformanceReportFilter * * *");
        foreach ($dataObjects->GeographicPerformanceReportFilter as $dataObject)
        {
            self::OutputGeographicPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfGeographicPerformanceReportFilter * * *");
    }
    static function OutputGeographicPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputGeographicPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfGeographicPerformanceReportColumn($dataObject->Columns);
            self::OutputGeographicPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputGeographicPerformanceReportRequest * * *");
    }
    static function OutputArrayOfGeographicPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GeographicPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfGeographicPerformanceReportRequest * * *");
        foreach ($dataObjects->GeographicPerformanceReportRequest as $dataObject)
        {
            self::OutputGeographicPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfGeographicPerformanceReportRequest * * *");
    }
    static function OutputGoalsAndFunnelsReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputGoalsAndFunnelsReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceOS: %s", $dataObject->DeviceOS));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputArrayOfLong($dataObject->GoalIds);
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
        }
        self::OutputStatusMessage("* * * End OutputGoalsAndFunnelsReportFilter * * *");
    }
    static function OutputArrayOfGoalsAndFunnelsReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GoalsAndFunnelsReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfGoalsAndFunnelsReportFilter * * *");
        foreach ($dataObjects->GoalsAndFunnelsReportFilter as $dataObject)
        {
            self::OutputGoalsAndFunnelsReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfGoalsAndFunnelsReportFilter * * *");
    }
    static function OutputGoalsAndFunnelsReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputGoalsAndFunnelsReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfGoalsAndFunnelsReportColumn($dataObject->Columns);
            self::OutputGoalsAndFunnelsReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputGoalsAndFunnelsReportRequest * * *");
    }
    static function OutputArrayOfGoalsAndFunnelsReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->GoalsAndFunnelsReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfGoalsAndFunnelsReportRequest * * *");
        foreach ($dataObjects->GoalsAndFunnelsReportRequest as $dataObject)
        {
            self::OutputGoalsAndFunnelsReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfGoalsAndFunnelsReportRequest * * *");
    }
    static function OutputKeywordPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputArrayOfInt($dataObject->AdRelevance);
            self::OutputStatusMessage(sprintf("AdType: %s", $dataObject->AdType));
            self::OutputStatusMessage(sprintf("BidMatchType: %s", $dataObject->BidMatchType));
            self::OutputStatusMessage(sprintf("BidStrategyType: %s", $dataObject->BidStrategyType));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeliveredMatchType: %s", $dataObject->DeliveredMatchType));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputArrayOfInt($dataObject->ExpectedCtr);
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
            self::OutputArrayOfString($dataObject->Keywords);
            self::OutputArrayOfInt($dataObject->LandingPageExperience);
            self::OutputArrayOfString($dataObject->LanguageCode);
            self::OutputArrayOfInt($dataObject->QualityScore);
        }
        self::OutputStatusMessage("* * * End OutputKeywordPerformanceReportFilter * * *");
    }
    static function OutputArrayOfKeywordPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordPerformanceReportFilter * * *");
        foreach ($dataObjects->KeywordPerformanceReportFilter as $dataObject)
        {
            self::OutputKeywordPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordPerformanceReportFilter * * *");
    }
    static function OutputKeywordPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfKeywordPerformanceReportColumn($dataObject->Columns);
            self::OutputKeywordPerformanceReportFilter($dataObject->Filter);
            self::OutputStatusMessage(sprintf("MaxRows: %s", $dataObject->MaxRows));
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputArrayOfKeywordPerformanceReportSort($dataObject->Sort);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputKeywordPerformanceReportRequest * * *");
    }
    static function OutputArrayOfKeywordPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordPerformanceReportRequest * * *");
        foreach ($dataObjects->KeywordPerformanceReportRequest as $dataObject)
        {
            self::OutputKeywordPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordPerformanceReportRequest * * *");
    }
    static function OutputKeywordPerformanceReportSort($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordPerformanceReportSort * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("SortColumn: %s", $dataObject->SortColumn));
            self::OutputStatusMessage(sprintf("SortOrder: %s", $dataObject->SortOrder));
        }
        self::OutputStatusMessage("* * * End OutputKeywordPerformanceReportSort * * *");
    }
    static function OutputArrayOfKeywordPerformanceReportSort($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordPerformanceReportSort))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordPerformanceReportSort * * *");
        foreach ($dataObjects->KeywordPerformanceReportSort as $dataObject)
        {
            self::OutputKeywordPerformanceReportSort($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordPerformanceReportSort * * *");
    }
    static function OutputNegativeKeywordConflictReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputNegativeKeywordConflictReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
        }
        self::OutputStatusMessage("* * * End OutputNegativeKeywordConflictReportFilter * * *");
    }
    static function OutputArrayOfNegativeKeywordConflictReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeKeywordConflictReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNegativeKeywordConflictReportFilter * * *");
        foreach ($dataObjects->NegativeKeywordConflictReportFilter as $dataObject)
        {
            self::OutputNegativeKeywordConflictReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNegativeKeywordConflictReportFilter * * *");
    }
    static function OutputNegativeKeywordConflictReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputNegativeKeywordConflictReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfNegativeKeywordConflictReportColumn($dataObject->Columns);
            self::OutputNegativeKeywordConflictReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
        }
        self::OutputStatusMessage("* * * End OutputNegativeKeywordConflictReportRequest * * *");
    }
    static function OutputArrayOfNegativeKeywordConflictReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeKeywordConflictReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNegativeKeywordConflictReportRequest * * *");
        foreach ($dataObjects->NegativeKeywordConflictReportRequest as $dataObject)
        {
            self::OutputNegativeKeywordConflictReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNegativeKeywordConflictReportRequest * * *");
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
    static function OutputProductDimensionPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductDimensionPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputProductDimensionPerformanceReportFilter * * *");
    }
    static function OutputArrayOfProductDimensionPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductDimensionPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductDimensionPerformanceReportFilter * * *");
        foreach ($dataObjects->ProductDimensionPerformanceReportFilter as $dataObject)
        {
            self::OutputProductDimensionPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductDimensionPerformanceReportFilter * * *");
    }
    static function OutputProductDimensionPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductDimensionPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfProductDimensionPerformanceReportColumn($dataObject->Columns);
            self::OutputProductDimensionPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputProductDimensionPerformanceReportRequest * * *");
    }
    static function OutputArrayOfProductDimensionPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductDimensionPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductDimensionPerformanceReportRequest * * *");
        foreach ($dataObjects->ProductDimensionPerformanceReportRequest as $dataObject)
        {
            self::OutputProductDimensionPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductDimensionPerformanceReportRequest * * *");
    }
    static function OutputProductMatchCountReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductMatchCountReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfProductMatchCountReportColumn($dataObject->Columns);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputProductMatchCountReportRequest * * *");
    }
    static function OutputArrayOfProductMatchCountReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductMatchCountReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductMatchCountReportRequest * * *");
        foreach ($dataObjects->ProductMatchCountReportRequest as $dataObject)
        {
            self::OutputProductMatchCountReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductMatchCountReportRequest * * *");
    }
    static function OutputProductPartitionPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductPartitionPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputProductPartitionPerformanceReportFilter * * *");
    }
    static function OutputArrayOfProductPartitionPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductPartitionPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductPartitionPerformanceReportFilter * * *");
        foreach ($dataObjects->ProductPartitionPerformanceReportFilter as $dataObject)
        {
            self::OutputProductPartitionPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductPartitionPerformanceReportFilter * * *");
    }
    static function OutputProductPartitionPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductPartitionPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfProductPartitionPerformanceReportColumn($dataObject->Columns);
            self::OutputProductPartitionPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputProductPartitionPerformanceReportRequest * * *");
    }
    static function OutputArrayOfProductPartitionPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductPartitionPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductPartitionPerformanceReportRequest * * *");
        foreach ($dataObjects->ProductPartitionPerformanceReportRequest as $dataObject)
        {
            self::OutputProductPartitionPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductPartitionPerformanceReportRequest * * *");
    }
    static function OutputProductPartitionUnitPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductPartitionUnitPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputProductPartitionUnitPerformanceReportFilter * * *");
    }
    static function OutputArrayOfProductPartitionUnitPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductPartitionUnitPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductPartitionUnitPerformanceReportFilter * * *");
        foreach ($dataObjects->ProductPartitionUnitPerformanceReportFilter as $dataObject)
        {
            self::OutputProductPartitionUnitPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductPartitionUnitPerformanceReportFilter * * *");
    }
    static function OutputProductPartitionUnitPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductPartitionUnitPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfProductPartitionUnitPerformanceReportColumn($dataObject->Columns);
            self::OutputProductPartitionUnitPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputProductPartitionUnitPerformanceReportRequest * * *");
    }
    static function OutputArrayOfProductPartitionUnitPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductPartitionUnitPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductPartitionUnitPerformanceReportRequest * * *");
        foreach ($dataObjects->ProductPartitionUnitPerformanceReportRequest as $dataObject)
        {
            self::OutputProductPartitionUnitPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductPartitionUnitPerformanceReportRequest * * *");
    }
    static function OutputProductSearchQueryPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductSearchQueryPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("AdType: %s", $dataObject->AdType));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("ExcludeZeroClicks: %s", $dataObject->ExcludeZeroClicks));
            self::OutputArrayOfString($dataObject->LanguageCode);
            self::OutputArrayOfString($dataObject->SearchQueries);
        }
        self::OutputStatusMessage("* * * End OutputProductSearchQueryPerformanceReportFilter * * *");
    }
    static function OutputArrayOfProductSearchQueryPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductSearchQueryPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductSearchQueryPerformanceReportFilter * * *");
        foreach ($dataObjects->ProductSearchQueryPerformanceReportFilter as $dataObject)
        {
            self::OutputProductSearchQueryPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductSearchQueryPerformanceReportFilter * * *");
    }
    static function OutputProductSearchQueryPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProductSearchQueryPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfProductSearchQueryPerformanceReportColumn($dataObject->Columns);
            self::OutputProductSearchQueryPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputProductSearchQueryPerformanceReportRequest * * *");
    }
    static function OutputArrayOfProductSearchQueryPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProductSearchQueryPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProductSearchQueryPerformanceReportRequest * * *");
        foreach ($dataObjects->ProductSearchQueryPerformanceReportRequest as $dataObject)
        {
            self::OutputProductSearchQueryPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProductSearchQueryPerformanceReportRequest * * *");
    }
    static function OutputProfessionalDemographicsAudienceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProfessionalDemographicsAudienceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputProfessionalDemographicsAudienceReportFilter * * *");
    }
    static function OutputArrayOfProfessionalDemographicsAudienceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProfessionalDemographicsAudienceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProfessionalDemographicsAudienceReportFilter * * *");
        foreach ($dataObjects->ProfessionalDemographicsAudienceReportFilter as $dataObject)
        {
            self::OutputProfessionalDemographicsAudienceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProfessionalDemographicsAudienceReportFilter * * *");
    }
    static function OutputProfessionalDemographicsAudienceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputProfessionalDemographicsAudienceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfProfessionalDemographicsAudienceReportColumn($dataObject->Columns);
            self::OutputProfessionalDemographicsAudienceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputProfessionalDemographicsAudienceReportRequest * * *");
    }
    static function OutputArrayOfProfessionalDemographicsAudienceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ProfessionalDemographicsAudienceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfProfessionalDemographicsAudienceReportRequest * * *");
        foreach ($dataObjects->ProfessionalDemographicsAudienceReportRequest as $dataObject)
        {
            self::OutputProfessionalDemographicsAudienceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfProfessionalDemographicsAudienceReportRequest * * *");
    }
    static function OutputPublisherUsagePerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPublisherUsagePerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputPublisherUsagePerformanceReportFilter * * *");
    }
    static function OutputArrayOfPublisherUsagePerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PublisherUsagePerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPublisherUsagePerformanceReportFilter * * *");
        foreach ($dataObjects->PublisherUsagePerformanceReportFilter as $dataObject)
        {
            self::OutputPublisherUsagePerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPublisherUsagePerformanceReportFilter * * *");
    }
    static function OutputPublisherUsagePerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputPublisherUsagePerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfPublisherUsagePerformanceReportColumn($dataObject->Columns);
            self::OutputPublisherUsagePerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputPublisherUsagePerformanceReportRequest * * *");
    }
    static function OutputArrayOfPublisherUsagePerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->PublisherUsagePerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfPublisherUsagePerformanceReportRequest * * *");
        foreach ($dataObjects->PublisherUsagePerformanceReportRequest as $dataObject)
        {
            self::OutputPublisherUsagePerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfPublisherUsagePerformanceReportRequest * * *");
    }
    static function OutputReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("ExcludeColumnHeaders: %s", $dataObject->ExcludeColumnHeaders));
            self::OutputStatusMessage(sprintf("ExcludeReportFooter: %s", $dataObject->ExcludeReportFooter));
            self::OutputStatusMessage(sprintf("ExcludeReportHeader: %s", $dataObject->ExcludeReportHeader));
            self::OutputStatusMessage(sprintf("Format: %s", $dataObject->Format));
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
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
            if($dataObject->Type === "AgeGenderDemographicReportRequest")
            {
                self::OutputAgeGenderDemographicReportRequest($dataObject);
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
        }
        self::OutputStatusMessage("* * * End OutputReportRequest * * *");
    }
    static function OutputArrayOfReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfReportRequest * * *");
        foreach ($dataObjects->ReportRequest as $dataObject)
        {
            self::OutputReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfReportRequest * * *");
    }
    static function OutputReportRequestStatus($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputReportRequestStatus * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("ReportDownloadUrl: %s", $dataObject->ReportDownloadUrl));
            self::OutputStatusMessage(sprintf("Status: %s", $dataObject->Status));
        }
        self::OutputStatusMessage("* * * End OutputReportRequestStatus * * *");
    }
    static function OutputArrayOfReportRequestStatus($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ReportRequestStatus))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfReportRequestStatus * * *");
        foreach ($dataObjects->ReportRequestStatus as $dataObject)
        {
            self::OutputReportRequestStatus($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfReportRequestStatus * * *");
    }
    static function OutputReportTime($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputReportTime * * *");
        if (!empty($dataObject))
        {
            self::OutputDate($dataObject->CustomDateRangeEnd);
            self::OutputDate($dataObject->CustomDateRangeStart);
            self::OutputStatusMessage(sprintf("PredefinedTime: %s", $dataObject->PredefinedTime));
            self::OutputStatusMessage(sprintf("ReportTimeZone: %s", $dataObject->ReportTimeZone));
        }
        self::OutputStatusMessage("* * * End OutputReportTime * * *");
    }
    static function OutputArrayOfReportTime($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ReportTime))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfReportTime * * *");
        foreach ($dataObjects->ReportTime as $dataObject)
        {
            self::OutputReportTime($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfReportTime * * *");
    }
    static function OutputSearchCampaignChangeHistoryReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSearchCampaignChangeHistoryReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("HowChanged: %s", $dataObject->HowChanged));
            self::OutputStatusMessage(sprintf("ItemChanged: %s", $dataObject->ItemChanged));
        }
        self::OutputStatusMessage("* * * End OutputSearchCampaignChangeHistoryReportFilter * * *");
    }
    static function OutputArrayOfSearchCampaignChangeHistoryReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchCampaignChangeHistoryReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSearchCampaignChangeHistoryReportFilter * * *");
        foreach ($dataObjects->SearchCampaignChangeHistoryReportFilter as $dataObject)
        {
            self::OutputSearchCampaignChangeHistoryReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSearchCampaignChangeHistoryReportFilter * * *");
    }
    static function OutputSearchCampaignChangeHistoryReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSearchCampaignChangeHistoryReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfSearchCampaignChangeHistoryReportColumn($dataObject->Columns);
            self::OutputSearchCampaignChangeHistoryReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputSearchCampaignChangeHistoryReportRequest * * *");
    }
    static function OutputArrayOfSearchCampaignChangeHistoryReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchCampaignChangeHistoryReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSearchCampaignChangeHistoryReportRequest * * *");
        foreach ($dataObjects->SearchCampaignChangeHistoryReportRequest as $dataObject)
        {
            self::OutputSearchCampaignChangeHistoryReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSearchCampaignChangeHistoryReportRequest * * *");
    }
    static function OutputSearchQueryPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSearchQueryPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("AdStatus: %s", $dataObject->AdStatus));
            self::OutputStatusMessage(sprintf("AdType: %s", $dataObject->AdType));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeliveredMatchType: %s", $dataObject->DeliveredMatchType));
            self::OutputStatusMessage(sprintf("ExcludeZeroClicks: %s", $dataObject->ExcludeZeroClicks));
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
            self::OutputArrayOfString($dataObject->LanguageCode);
            self::OutputArrayOfString($dataObject->SearchQueries);
        }
        self::OutputStatusMessage("* * * End OutputSearchQueryPerformanceReportFilter * * *");
    }
    static function OutputArrayOfSearchQueryPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchQueryPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSearchQueryPerformanceReportFilter * * *");
        foreach ($dataObjects->SearchQueryPerformanceReportFilter as $dataObject)
        {
            self::OutputSearchQueryPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSearchQueryPerformanceReportFilter * * *");
    }
    static function OutputSearchQueryPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSearchQueryPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfSearchQueryPerformanceReportColumn($dataObject->Columns);
            self::OutputSearchQueryPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputSearchQueryPerformanceReportRequest * * *");
    }
    static function OutputArrayOfSearchQueryPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchQueryPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSearchQueryPerformanceReportRequest * * *");
        foreach ($dataObjects->SearchQueryPerformanceReportRequest as $dataObject)
        {
            self::OutputSearchQueryPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSearchQueryPerformanceReportRequest * * *");
    }
    static function OutputShareOfVoiceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputShareOfVoiceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AccountStatus: %s", $dataObject->AccountStatus));
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputStatusMessage(sprintf("AdGroupStatus: %s", $dataObject->AdGroupStatus));
            self::OutputStatusMessage(sprintf("BidMatchType: %s", $dataObject->BidMatchType));
            self::OutputStatusMessage(sprintf("BidStrategyType: %s", $dataObject->BidStrategyType));
            self::OutputStatusMessage(sprintf("CampaignStatus: %s", $dataObject->CampaignStatus));
            self::OutputStatusMessage(sprintf("DeliveredMatchType: %s", $dataObject->DeliveredMatchType));
            self::OutputStatusMessage(sprintf("DeviceType: %s", $dataObject->DeviceType));
            self::OutputStatusMessage(sprintf("KeywordStatus: %s", $dataObject->KeywordStatus));
            self::OutputArrayOfString($dataObject->Keywords);
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputShareOfVoiceReportFilter * * *");
    }
    static function OutputArrayOfShareOfVoiceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ShareOfVoiceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfShareOfVoiceReportFilter * * *");
        foreach ($dataObjects->ShareOfVoiceReportFilter as $dataObject)
        {
            self::OutputShareOfVoiceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfShareOfVoiceReportFilter * * *");
    }
    static function OutputShareOfVoiceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputShareOfVoiceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfShareOfVoiceReportColumn($dataObject->Columns);
            self::OutputShareOfVoiceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputShareOfVoiceReportRequest * * *");
    }
    static function OutputArrayOfShareOfVoiceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ShareOfVoiceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfShareOfVoiceReportRequest * * *");
        foreach ($dataObjects->ShareOfVoiceReportRequest as $dataObject)
        {
            self::OutputShareOfVoiceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfShareOfVoiceReportRequest * * *");
    }
    static function OutputUserLocationPerformanceReportFilter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputUserLocationPerformanceReportFilter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdDistribution: %s", $dataObject->AdDistribution));
            self::OutputArrayOfString($dataObject->CountryCode);
            self::OutputArrayOfString($dataObject->LanguageCode);
        }
        self::OutputStatusMessage("* * * End OutputUserLocationPerformanceReportFilter * * *");
    }
    static function OutputArrayOfUserLocationPerformanceReportFilter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UserLocationPerformanceReportFilter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfUserLocationPerformanceReportFilter * * *");
        foreach ($dataObjects->UserLocationPerformanceReportFilter as $dataObject)
        {
            self::OutputUserLocationPerformanceReportFilter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfUserLocationPerformanceReportFilter * * *");
    }
    static function OutputUserLocationPerformanceReportRequest($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputUserLocationPerformanceReportRequest * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Aggregation: %s", $dataObject->Aggregation));
            self::OutputArrayOfUserLocationPerformanceReportColumn($dataObject->Columns);
            self::OutputUserLocationPerformanceReportFilter($dataObject->Filter);
            self::OutputAccountThroughAdGroupReportScope($dataObject->Scope);
            self::OutputReportTime($dataObject->Time);
        }
        self::OutputStatusMessage("* * * End OutputUserLocationPerformanceReportRequest * * *");
    }
    static function OutputArrayOfUserLocationPerformanceReportRequest($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UserLocationPerformanceReportRequest))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfUserLocationPerformanceReportRequest * * *");
        foreach ($dataObjects->UserLocationPerformanceReportRequest as $dataObject)
        {
            self::OutputUserLocationPerformanceReportRequest($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfUserLocationPerformanceReportRequest * * *");
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
    static function OutputReportLanguage($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputReportLanguage * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputReportLanguage * * *");
    }
    static function OutputArrayOfReportLanguage($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfReportLanguage * * *");
        foreach ($valueSets->ReportLanguage as $valueSet)
        {
            self::OutputReportLanguage($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfReportLanguage * * *");
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
    static function OutputAgeGenderDemographicReportColumn($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAgeGenderDemographicReportColumn * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAgeGenderDemographicReportColumn * * *");
    }
    static function OutputArrayOfAgeGenderDemographicReportColumn($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAgeGenderDemographicReportColumn * * *");
        foreach ($valueSets->AgeGenderDemographicReportColumn as $valueSet)
        {
            self::OutputAgeGenderDemographicReportColumn($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAgeGenderDemographicReportColumn * * *");
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
