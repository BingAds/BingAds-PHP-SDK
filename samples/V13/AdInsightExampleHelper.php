<?php

namespace Microsoft\BingAds\Samples\V13;

require_once __DIR__ . "/../vendor/autoload.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\AdInsight classes that will be used.
use Microsoft\BingAds\V13\AdInsight\GetAuctionInsightDataRequest;
use Microsoft\BingAds\V13\AdInsight\GetBidLandscapeByAdGroupIdsRequest;
use Microsoft\BingAds\V13\AdInsight\GetBidLandscapeByKeywordIdsRequest;
use Microsoft\BingAds\V13\AdInsight\GetBidOpportunitiesRequest;
use Microsoft\BingAds\V13\AdInsight\GetBudgetOpportunitiesRequest;
use Microsoft\BingAds\V13\AdInsight\GetDomainCategoriesRequest;
use Microsoft\BingAds\V13\AdInsight\GetEstimatedBidByKeywordIdsRequest;
use Microsoft\BingAds\V13\AdInsight\GetEstimatedBidByKeywordsRequest;
use Microsoft\BingAds\V13\AdInsight\GetEstimatedPositionByKeywordIdsRequest;
use Microsoft\BingAds\V13\AdInsight\GetEstimatedPositionByKeywordsRequest;
use Microsoft\BingAds\V13\AdInsight\GetHistoricalKeywordPerformanceRequest;
use Microsoft\BingAds\V13\AdInsight\GetHistoricalSearchCountRequest;
use Microsoft\BingAds\V13\AdInsight\GetKeywordCategoriesRequest;
use Microsoft\BingAds\V13\AdInsight\GetKeywordDemographicsRequest;
use Microsoft\BingAds\V13\AdInsight\GetKeywordIdeaCategoriesRequest;
use Microsoft\BingAds\V13\AdInsight\GetKeywordIdeasRequest;
use Microsoft\BingAds\V13\AdInsight\GetKeywordLocationsRequest;
use Microsoft\BingAds\V13\AdInsight\GetKeywordOpportunitiesRequest;
use Microsoft\BingAds\V13\AdInsight\GetKeywordTrafficEstimatesRequest;
use Microsoft\BingAds\V13\AdInsight\SuggestKeywordsForUrlRequest;
use Microsoft\BingAds\V13\AdInsight\SuggestKeywordsFromExistingKeywordsRequest;

final class AdInsightExampleHelper {
    static function GetAuctionInsightData(
        $entityType,
        $entityIds,
        $searchParameters,
        $returnAdditionalFields)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetAuctionInsightDataRequest();

        $request->EntityType = $entityType;
        $request->EntityIds = $entityIds;
        $request->SearchParameters = $searchParameters;
        $request->ReturnAdditionalFields = $returnAdditionalFields;

        return $GLOBALS['AdInsightProxy']->GetService()->GetAuctionInsightData($request);
    }
    static function GetBidLandscapeByAdGroupIds(
        $adGroupBidLandscapeInputs)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetBidLandscapeByAdGroupIdsRequest();

        $request->AdGroupBidLandscapeInputs = $adGroupBidLandscapeInputs;

        return $GLOBALS['AdInsightProxy']->GetService()->GetBidLandscapeByAdGroupIds($request);
    }
    static function GetBidLandscapeByKeywordIds(
        $keywordIds,
        $includeCurrentBid)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetBidLandscapeByKeywordIdsRequest();

        $request->KeywordIds = $keywordIds;
        $request->IncludeCurrentBid = $includeCurrentBid;

        return $GLOBALS['AdInsightProxy']->GetService()->GetBidLandscapeByKeywordIds($request);
    }
    static function GetBidOpportunities(
        $adGroupId,
        $campaignId,
        $opportunityType)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetBidOpportunitiesRequest();

        $request->AdGroupId = $adGroupId;
        $request->CampaignId = $campaignId;
        $request->OpportunityType = $opportunityType;

        return $GLOBALS['AdInsightProxy']->GetService()->GetBidOpportunities($request);
    }
    static function GetBudgetOpportunities(
        $campaignId)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetBudgetOpportunitiesRequest();

        $request->CampaignId = $campaignId;

        return $GLOBALS['AdInsightProxy']->GetService()->GetBudgetOpportunities($request);
    }
    static function GetDomainCategories(
        $categoryName,
        $domainName,
        $language)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetDomainCategoriesRequest();

        $request->CategoryName = $categoryName;
        $request->DomainName = $domainName;
        $request->Language = $language;

        return $GLOBALS['AdInsightProxy']->GetService()->GetDomainCategories($request);
    }
    static function GetEstimatedBidByKeywordIds(
        $keywordIds,
        $targetPositionForAds)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetEstimatedBidByKeywordIdsRequest();

        $request->KeywordIds = $keywordIds;
        $request->TargetPositionForAds = $targetPositionForAds;

        return $GLOBALS['AdInsightProxy']->GetService()->GetEstimatedBidByKeywordIds($request);
    }
    static function GetEstimatedBidByKeywords(
        $keywords,
        $targetPositionForAds,
        $language,
        $locationIds,
        $currencyCode,
        $campaignId,
        $adGroupId,
        $entityLevelBid)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetEstimatedBidByKeywordsRequest();

        $request->Keywords = $keywords;
        $request->TargetPositionForAds = $targetPositionForAds;
        $request->Language = $language;
        $request->LocationIds = $locationIds;
        $request->CurrencyCode = $currencyCode;
        $request->CampaignId = $campaignId;
        $request->AdGroupId = $adGroupId;
        $request->EntityLevelBid = $entityLevelBid;

        return $GLOBALS['AdInsightProxy']->GetService()->GetEstimatedBidByKeywords($request);
    }
    static function GetEstimatedPositionByKeywordIds(
        $keywordIds,
        $maxBid)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetEstimatedPositionByKeywordIdsRequest();

        $request->KeywordIds = $keywordIds;
        $request->MaxBid = $maxBid;

        return $GLOBALS['AdInsightProxy']->GetService()->GetEstimatedPositionByKeywordIds($request);
    }
    static function GetEstimatedPositionByKeywords(
        $keywords,
        $maxBid,
        $language,
        $locationIds,
        $currencyCode,
        $matchTypes,
        $campaignId,
        $adGroupId)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetEstimatedPositionByKeywordsRequest();

        $request->Keywords = $keywords;
        $request->MaxBid = $maxBid;
        $request->Language = $language;
        $request->LocationIds = $locationIds;
        $request->CurrencyCode = $currencyCode;
        $request->MatchTypes = $matchTypes;
        $request->CampaignId = $campaignId;
        $request->AdGroupId = $adGroupId;

        return $GLOBALS['AdInsightProxy']->GetService()->GetEstimatedPositionByKeywords($request);
    }
    static function GetHistoricalKeywordPerformance(
        $keywords,
        $timeInterval,
        $targetAdPosition,
        $matchTypes,
        $language,
        $publisherCountries,
        $devices)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetHistoricalKeywordPerformanceRequest();

        $request->Keywords = $keywords;
        $request->TimeInterval = $timeInterval;
        $request->TargetAdPosition = $targetAdPosition;
        $request->MatchTypes = $matchTypes;
        $request->Language = $language;
        $request->PublisherCountries = $publisherCountries;
        $request->Devices = $devices;

        return $GLOBALS['AdInsightProxy']->GetService()->GetHistoricalKeywordPerformance($request);
    }
    static function GetHistoricalSearchCount(
        $keywords,
        $language,
        $publisherCountries,
        $startDate,
        $endDate,
        $timePeriodRollup,
        $devices)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetHistoricalSearchCountRequest();

        $request->Keywords = $keywords;
        $request->Language = $language;
        $request->PublisherCountries = $publisherCountries;
        $request->StartDate = $startDate;
        $request->EndDate = $endDate;
        $request->TimePeriodRollup = $timePeriodRollup;
        $request->Devices = $devices;

        return $GLOBALS['AdInsightProxy']->GetService()->GetHistoricalSearchCount($request);
    }
    static function GetKeywordCategories(
        $keywords,
        $language,
        $publisherCountry,
        $maxCategories)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetKeywordCategoriesRequest();

        $request->Keywords = $keywords;
        $request->Language = $language;
        $request->PublisherCountry = $publisherCountry;
        $request->MaxCategories = $maxCategories;

        return $GLOBALS['AdInsightProxy']->GetService()->GetKeywordCategories($request);
    }
    static function GetKeywordDemographics(
        $keywords,
        $language,
        $publisherCountry,
        $device)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetKeywordDemographicsRequest();

        $request->Keywords = $keywords;
        $request->Language = $language;
        $request->PublisherCountry = $publisherCountry;
        $request->Device = $device;

        return $GLOBALS['AdInsightProxy']->GetService()->GetKeywordDemographics($request);
    }
    static function GetKeywordIdeaCategories()
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetKeywordIdeaCategoriesRequest();


        return $GLOBALS['AdInsightProxy']->GetService()->GetKeywordIdeaCategories($request);
    }
    static function GetKeywordIdeas(
        $expandIdeas,
        $ideaAttributes,
        $searchParameters)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetKeywordIdeasRequest();

        $request->ExpandIdeas = $expandIdeas;
        $request->IdeaAttributes = $ideaAttributes;
        $request->SearchParameters = $searchParameters;

        return $GLOBALS['AdInsightProxy']->GetService()->GetKeywordIdeas($request);
    }
    static function GetKeywordLocations(
        $keywords,
        $language,
        $publisherCountry,
        $device,
        $level,
        $parentCountry,
        $maxLocations)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetKeywordLocationsRequest();

        $request->Keywords = $keywords;
        $request->Language = $language;
        $request->PublisherCountry = $publisherCountry;
        $request->Device = $device;
        $request->Level = $level;
        $request->ParentCountry = $parentCountry;
        $request->MaxLocations = $maxLocations;

        return $GLOBALS['AdInsightProxy']->GetService()->GetKeywordLocations($request);
    }
    static function GetKeywordOpportunities(
        $adGroupId,
        $campaignId,
        $opportunityType)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetKeywordOpportunitiesRequest();

        $request->AdGroupId = $adGroupId;
        $request->CampaignId = $campaignId;
        $request->OpportunityType = $opportunityType;

        return $GLOBALS['AdInsightProxy']->GetService()->GetKeywordOpportunities($request);
    }
    static function GetKeywordTrafficEstimates(
        $campaignEstimators)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetKeywordTrafficEstimatesRequest();

        $request->CampaignEstimators = $campaignEstimators;

        return $GLOBALS['AdInsightProxy']->GetService()->GetKeywordTrafficEstimates($request);
    }
    static function SuggestKeywordsForUrl(
        $url,
        $language,
        $maxKeywords,
        $minConfidenceScore,
        $excludeBrand)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new SuggestKeywordsForUrlRequest();

        $request->Url = $url;
        $request->Language = $language;
        $request->MaxKeywords = $maxKeywords;
        $request->MinConfidenceScore = $minConfidenceScore;
        $request->ExcludeBrand = $excludeBrand;

        return $GLOBALS['AdInsightProxy']->GetService()->SuggestKeywordsForUrl($request);
    }
    static function SuggestKeywordsFromExistingKeywords(
        $keywords,
        $language,
        $publisherCountries,
        $maxSuggestionsPerKeyword,
        $suggestionType,
        $removeDuplicates,
        $excludeBrand,
        $adGroupId,
        $campaignId)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new SuggestKeywordsFromExistingKeywordsRequest();

        $request->Keywords = $keywords;
        $request->Language = $language;
        $request->PublisherCountries = $publisherCountries;
        $request->MaxSuggestionsPerKeyword = $maxSuggestionsPerKeyword;
        $request->SuggestionType = $suggestionType;
        $request->RemoveDuplicates = $removeDuplicates;
        $request->ExcludeBrand = $excludeBrand;
        $request->AdGroupId = $adGroupId;
        $request->CampaignId = $campaignId;

        return $GLOBALS['AdInsightProxy']->GetService()->SuggestKeywordsFromExistingKeywords($request);
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
    static function OutputAdGroupBidLandscape($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdGroupBidLandscape * * *");
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage(sprintf("AdGroupBidLandscapeType: %s", $dataObject->AdGroupBidLandscapeType));
            self::OutputStatusMessage("StartDate:");
            self::OutputDayMonthAndYear($dataObject->StartDate);
            self::OutputStatusMessage("EndDate:");
            self::OutputDayMonthAndYear($dataObject->EndDate);
            self::OutputStatusMessage("BidLandscapePoints:");
            self::OutputArrayOfBidLandscapePoint($dataObject->BidLandscapePoints);
            self::OutputStatusMessage("* * * End OutputAdGroupBidLandscape * * *");
        }
    }
    static function OutputArrayOfAdGroupBidLandscape($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupBidLandscape))
        {
            return;
        }
        foreach ($dataObjects->AdGroupBidLandscape as $dataObject)
        {
            self::OutputAdGroupBidLandscape($dataObject);
        }
    }
    static function OutputAdGroupBidLandscapeInput($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdGroupBidLandscapeInput * * *");
            self::OutputStatusMessage(sprintf("AdGroupBidLandscapeType: %s", $dataObject->AdGroupBidLandscapeType));
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage("* * * End OutputAdGroupBidLandscapeInput * * *");
        }
    }
    static function OutputArrayOfAdGroupBidLandscapeInput($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupBidLandscapeInput))
        {
            return;
        }
        foreach ($dataObjects->AdGroupBidLandscapeInput as $dataObject)
        {
            self::OutputAdGroupBidLandscapeInput($dataObject);
        }
    }
    static function OutputAdGroupEstimate($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdGroupEstimate * * *");
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage("KeywordEstimates:");
            self::OutputArrayOfKeywordEstimate($dataObject->KeywordEstimates);
            self::OutputStatusMessage("* * * End OutputAdGroupEstimate * * *");
        }
    }
    static function OutputArrayOfAdGroupEstimate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupEstimate))
        {
            return;
        }
        foreach ($dataObjects->AdGroupEstimate as $dataObject)
        {
            self::OutputAdGroupEstimate($dataObject);
        }
    }
    static function OutputAdGroupEstimator($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAdGroupEstimator * * *");
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage("KeywordEstimators:");
            self::OutputArrayOfKeywordEstimator($dataObject->KeywordEstimators);
            self::OutputStatusMessage(sprintf("MaxCpc: %s", $dataObject->MaxCpc));
            self::OutputStatusMessage("* * * End OutputAdGroupEstimator * * *");
        }
    }
    static function OutputArrayOfAdGroupEstimator($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupEstimator))
        {
            return;
        }
        foreach ($dataObjects->AdGroupEstimator as $dataObject)
        {
            self::OutputAdGroupEstimator($dataObject);
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
    static function OutputAuctionInsightEntry($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAuctionInsightEntry * * *");
            self::OutputStatusMessage(sprintf("DisplayDomain: %s", $dataObject->DisplayDomain));
            self::OutputStatusMessage("AggregatedKpi:");
            self::OutputAuctionInsightKpi($dataObject->AggregatedKpi);
            self::OutputStatusMessage("SegmentedKpis:");
            self::OutputArrayOfAuctionInsightKpi($dataObject->SegmentedKpis);
            self::OutputStatusMessage("* * * End OutputAuctionInsightEntry * * *");
        }
    }
    static function OutputArrayOfAuctionInsightEntry($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AuctionInsightEntry))
        {
            return;
        }
        foreach ($dataObjects->AuctionInsightEntry as $dataObject)
        {
            self::OutputAuctionInsightEntry($dataObject);
        }
    }
    static function OutputAuctionInsightKpi($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAuctionInsightKpi * * *");
            self::OutputStatusMessage("Segments:");
            self::OutputArrayOfString($dataObject->Segments);
            self::OutputStatusMessage(sprintf("ImpressionShare: %s", $dataObject->ImpressionShare));
            self::OutputStatusMessage(sprintf("OverlapRate: %s", $dataObject->OverlapRate));
            self::OutputStatusMessage(sprintf("AveragePosition: %s", $dataObject->AveragePosition));
            self::OutputStatusMessage(sprintf("AboveRate: %s", $dataObject->AboveRate));
            self::OutputStatusMessage(sprintf("TopOfPageRate: %s", $dataObject->TopOfPageRate));
            self::OutputStatusMessage(sprintf("OutrankingShare: %s", $dataObject->OutrankingShare));
            self::OutputStatusMessage(sprintf("AbsoluteTopOfPageRate: %s", $dataObject->AbsoluteTopOfPageRate));
            self::OutputStatusMessage("* * * End OutputAuctionInsightKpi * * *");
        }
    }
    static function OutputArrayOfAuctionInsightKpi($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AuctionInsightKpi))
        {
            return;
        }
        foreach ($dataObjects->AuctionInsightKpi as $dataObject)
        {
            self::OutputAuctionInsightKpi($dataObject);
        }
    }
    static function OutputAuctionInsightResult($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAuctionInsightResult * * *");
            self::OutputStatusMessage("Segments:");
            self::OutputArrayOfAuctionSegment($dataObject->Segments);
            self::OutputStatusMessage("Entries:");
            self::OutputArrayOfAuctionInsightEntry($dataObject->Entries);
            self::OutputStatusMessage(sprintf("UsedImpressions: %s", $dataObject->UsedImpressions));
            self::OutputStatusMessage(sprintf("UsedKeywords: %s", $dataObject->UsedKeywords));
            self::OutputStatusMessage("* * * End OutputAuctionInsightResult * * *");
        }
    }
    static function OutputArrayOfAuctionInsightResult($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AuctionInsightResult))
        {
            return;
        }
        foreach ($dataObjects->AuctionInsightResult as $dataObject)
        {
            self::OutputAuctionInsightResult($dataObject);
        }
    }
    static function OutputAuctionSegmentSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputAuctionSegmentSearchParameter * * *");
            self::OutputStatusMessage(sprintf("Segment: %s", $dataObject->Segment));
            self::OutputStatusMessage("* * * End OutputAuctionSegmentSearchParameter * * *");
        }
    }
    static function OutputArrayOfAuctionSegmentSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AuctionSegmentSearchParameter))
        {
            return;
        }
        foreach ($dataObjects->AuctionSegmentSearchParameter as $dataObject)
        {
            self::OutputAuctionSegmentSearchParameter($dataObject);
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
    static function OutputBidLandscapePoint($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBidLandscapePoint * * *");
            self::OutputStatusMessage(sprintf("Bid: %s", $dataObject->Bid));
            self::OutputStatusMessage(sprintf("Clicks: %s", $dataObject->Clicks));
            self::OutputStatusMessage(sprintf("Impressions: %s", $dataObject->Impressions));
            self::OutputStatusMessage(sprintf("TopImpressions: %s", $dataObject->TopImpressions));
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("Cost: %s", $dataObject->Cost));
            self::OutputStatusMessage(sprintf("MarginalCPC: %s", $dataObject->MarginalCPC));
            self::OutputStatusMessage("* * * End OutputBidLandscapePoint * * *");
        }
    }
    static function OutputArrayOfBidLandscapePoint($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BidLandscapePoint))
        {
            return;
        }
        foreach ($dataObjects->BidLandscapePoint as $dataObject)
        {
            self::OutputBidLandscapePoint($dataObject);
        }
    }
    static function OutputBidOpportunity($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBidOpportunity * * *");
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage(sprintf("CurrentBid: %s", $dataObject->CurrentBid));
            self::OutputStatusMessage(sprintf("EstimatedIncreaseInClicks: %s", $dataObject->EstimatedIncreaseInClicks));
            self::OutputStatusMessage(sprintf("EstimatedIncreaseInCost: %s", $dataObject->EstimatedIncreaseInCost));
            self::OutputStatusMessage(sprintf("EstimatedIncreaseInImpressions: %s", $dataObject->EstimatedIncreaseInImpressions));
            self::OutputStatusMessage(sprintf("KeywordId: %s", $dataObject->KeywordId));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("SuggestedBid: %s", $dataObject->SuggestedBid));
            self::OutputStatusMessage("* * * End OutputBidOpportunity * * *");
        }
    }
    static function OutputArrayOfBidOpportunity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BidOpportunity))
        {
            return;
        }
        foreach ($dataObjects->BidOpportunity as $dataObject)
        {
            self::OutputBidOpportunity($dataObject);
        }
    }
    static function OutputBroadMatchKeywordOpportunity($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBroadMatchKeywordOpportunity * * *");
            self::OutputStatusMessage(sprintf("AverageCPC: %s", $dataObject->AverageCPC));
            self::OutputStatusMessage(sprintf("AverageCTR: %s", $dataObject->AverageCTR));
            self::OutputStatusMessage(sprintf("ClickShare: %s", $dataObject->ClickShare));
            self::OutputStatusMessage(sprintf("ImpressionShare: %s", $dataObject->ImpressionShare));
            self::OutputStatusMessage(sprintf("ReferenceKeywordBid: %s", $dataObject->ReferenceKeywordBid));
            self::OutputStatusMessage(sprintf("ReferenceKeywordId: %s", $dataObject->ReferenceKeywordId));
            self::OutputStatusMessage(sprintf("ReferenceKeywordMatchType: %s", $dataObject->ReferenceKeywordMatchType));
            self::OutputStatusMessage("SearchQueryKPIs:");
            self::OutputArrayOfBroadMatchSearchQueryKPI($dataObject->SearchQueryKPIs);
            self::OutputStatusMessage("* * * End OutputBroadMatchKeywordOpportunity * * *");
        }
    }
    static function OutputArrayOfBroadMatchKeywordOpportunity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BroadMatchKeywordOpportunity))
        {
            return;
        }
        foreach ($dataObjects->BroadMatchKeywordOpportunity as $dataObject)
        {
            self::OutputBroadMatchKeywordOpportunity($dataObject);
        }
    }
    static function OutputBroadMatchSearchQueryKPI($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBroadMatchSearchQueryKPI * * *");
            self::OutputStatusMessage(sprintf("AverageCTR: %s", $dataObject->AverageCTR));
            self::OutputStatusMessage(sprintf("Clicks: %s", $dataObject->Clicks));
            self::OutputStatusMessage(sprintf("Impressions: %s", $dataObject->Impressions));
            self::OutputStatusMessage(sprintf("SRPV: %s", $dataObject->SRPV));
            self::OutputStatusMessage(sprintf("SearchQuery: %s", $dataObject->SearchQuery));
            self::OutputStatusMessage("* * * End OutputBroadMatchSearchQueryKPI * * *");
        }
    }
    static function OutputArrayOfBroadMatchSearchQueryKPI($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BroadMatchSearchQueryKPI))
        {
            return;
        }
        foreach ($dataObjects->BroadMatchSearchQueryKPI as $dataObject)
        {
            self::OutputBroadMatchSearchQueryKPI($dataObject);
        }
    }
    static function OutputBudgetOpportunity($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBudgetOpportunity * * *");
            self::OutputStatusMessage("BudgetPoints:");
            self::OutputArrayOfBudgetPoint($dataObject->BudgetPoints);
            self::OutputStatusMessage(sprintf("BudgetType: %s", $dataObject->BudgetType));
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage(sprintf("CurrentBudget: %s", $dataObject->CurrentBudget));
            self::OutputStatusMessage(sprintf("IncreaseInClicks: %s", $dataObject->IncreaseInClicks));
            self::OutputStatusMessage(sprintf("IncreaseInImpressions: %s", $dataObject->IncreaseInImpressions));
            self::OutputStatusMessage(sprintf("PercentageIncreaseInClicks: %s", $dataObject->PercentageIncreaseInClicks));
            self::OutputStatusMessage(sprintf("PercentageIncreaseInImpressions: %s", $dataObject->PercentageIncreaseInImpressions));
            self::OutputStatusMessage(sprintf("RecommendedBudget: %s", $dataObject->RecommendedBudget));
            self::OutputStatusMessage("* * * End OutputBudgetOpportunity * * *");
        }
    }
    static function OutputArrayOfBudgetOpportunity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BudgetOpportunity))
        {
            return;
        }
        foreach ($dataObjects->BudgetOpportunity as $dataObject)
        {
            self::OutputBudgetOpportunity($dataObject);
        }
    }
    static function OutputBudgetPoint($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputBudgetPoint * * *");
            self::OutputStatusMessage(sprintf("BudgetAmount: %s", $dataObject->BudgetAmount));
            self::OutputStatusMessage(sprintf("BudgetPointType: %s", $dataObject->BudgetPointType));
            self::OutputStatusMessage(sprintf("EstimatedWeeklyClicks: %s", $dataObject->EstimatedWeeklyClicks));
            self::OutputStatusMessage(sprintf("EstimatedWeeklyCost: %s", $dataObject->EstimatedWeeklyCost));
            self::OutputStatusMessage(sprintf("EstimatedWeeklyImpressions: %s", $dataObject->EstimatedWeeklyImpressions));
            self::OutputStatusMessage("* * * End OutputBudgetPoint * * *");
        }
    }
    static function OutputArrayOfBudgetPoint($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BudgetPoint))
        {
            return;
        }
        foreach ($dataObjects->BudgetPoint as $dataObject)
        {
            self::OutputBudgetPoint($dataObject);
        }
    }
    static function OutputCampaignEstimate($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCampaignEstimate * * *");
            self::OutputStatusMessage("AdGroupEstimates:");
            self::OutputArrayOfAdGroupEstimate($dataObject->AdGroupEstimates);
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage("* * * End OutputCampaignEstimate * * *");
        }
    }
    static function OutputArrayOfCampaignEstimate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignEstimate))
        {
            return;
        }
        foreach ($dataObjects->CampaignEstimate as $dataObject)
        {
            self::OutputCampaignEstimate($dataObject);
        }
    }
    static function OutputCampaignEstimator($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCampaignEstimator * * *");
            self::OutputStatusMessage("AdGroupEstimators:");
            self::OutputArrayOfAdGroupEstimator($dataObject->AdGroupEstimators);
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage("Criteria:");
            self::OutputArrayOfCriterion($dataObject->Criteria);
            self::OutputStatusMessage(sprintf("DailyBudget: %s", $dataObject->DailyBudget));
            self::OutputStatusMessage("NegativeKeywords:");
            self::OutputArrayOfNegativeKeyword($dataObject->NegativeKeywords);
            self::OutputStatusMessage("* * * End OutputCampaignEstimator * * *");
        }
    }
    static function OutputArrayOfCampaignEstimator($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignEstimator))
        {
            return;
        }
        foreach ($dataObjects->CampaignEstimator as $dataObject)
        {
            self::OutputCampaignEstimator($dataObject);
        }
    }
    static function OutputCategorySearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCategorySearchParameter * * *");
            self::OutputStatusMessage(sprintf("CategoryId: %s", $dataObject->CategoryId));
            self::OutputStatusMessage("* * * End OutputCategorySearchParameter * * *");
        }
    }
    static function OutputArrayOfCategorySearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CategorySearchParameter))
        {
            return;
        }
        foreach ($dataObjects->CategorySearchParameter as $dataObject)
        {
            self::OutputCategorySearchParameter($dataObject);
        }
    }
    static function OutputCompetitionSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCompetitionSearchParameter * * *");
            self::OutputStatusMessage("CompetitionLevels:");
            self::OutputArrayOfCompetitionLevel($dataObject->CompetitionLevels);
            self::OutputStatusMessage("* * * End OutputCompetitionSearchParameter * * *");
        }
    }
    static function OutputArrayOfCompetitionSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CompetitionSearchParameter))
        {
            return;
        }
        foreach ($dataObjects->CompetitionSearchParameter as $dataObject)
        {
            self::OutputCompetitionSearchParameter($dataObject);
        }
    }
    static function OutputCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputCriterion * * *");
            if($dataObject->Type === "DeviceCriterion")
            {
                self::OutputDeviceCriterion($dataObject);
            }
            if($dataObject->Type === "LanguageCriterion")
            {
                self::OutputLanguageCriterion($dataObject);
            }
            if($dataObject->Type === "LocationCriterion")
            {
                self::OutputLocationCriterion($dataObject);
            }
            if($dataObject->Type === "NetworkCriterion")
            {
                self::OutputNetworkCriterion($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputCriterion * * *");
        }
    }
    static function OutputArrayOfCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Criterion))
        {
            return;
        }
        foreach ($dataObjects->Criterion as $dataObject)
        {
            self::OutputCriterion($dataObject);
        }
    }
    static function OutputDateRangeSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDateRangeSearchParameter * * *");
            self::OutputStatusMessage("EndDate:");
            self::OutputDayMonthAndYear($dataObject->EndDate);
            self::OutputStatusMessage("StartDate:");
            self::OutputDayMonthAndYear($dataObject->StartDate);
            self::OutputStatusMessage("* * * End OutputDateRangeSearchParameter * * *");
        }
    }
    static function OutputArrayOfDateRangeSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DateRangeSearchParameter))
        {
            return;
        }
        foreach ($dataObjects->DateRangeSearchParameter as $dataObject)
        {
            self::OutputDateRangeSearchParameter($dataObject);
        }
    }
    static function OutputDayMonthAndYear($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDayMonthAndYear * * *");
            self::OutputStatusMessage(sprintf("Day: %s", $dataObject->Day));
            self::OutputStatusMessage(sprintf("Month: %s", $dataObject->Month));
            self::OutputStatusMessage(sprintf("Year: %s", $dataObject->Year));
            self::OutputStatusMessage("* * * End OutputDayMonthAndYear * * *");
        }
    }
    static function OutputArrayOfDayMonthAndYear($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DayMonthAndYear))
        {
            return;
        }
        foreach ($dataObjects->DayMonthAndYear as $dataObject)
        {
            self::OutputDayMonthAndYear($dataObject);
        }
    }
    static function OutputDeviceCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDeviceCriterion * * *");
            self::OutputStatusMessage(sprintf("DeviceName: %s", $dataObject->DeviceName));
            self::OutputStatusMessage("* * * End OutputDeviceCriterion * * *");
        }
    }
    static function OutputArrayOfDeviceCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DeviceCriterion))
        {
            return;
        }
        foreach ($dataObjects->DeviceCriterion as $dataObject)
        {
            self::OutputDeviceCriterion($dataObject);
        }
    }
    static function OutputDeviceSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDeviceSearchParameter * * *");
            self::OutputStatusMessage("Device:");
            self::OutputDeviceCriterion($dataObject->Device);
            self::OutputStatusMessage("* * * End OutputDeviceSearchParameter * * *");
        }
    }
    static function OutputArrayOfDeviceSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DeviceSearchParameter))
        {
            return;
        }
        foreach ($dataObjects->DeviceSearchParameter as $dataObject)
        {
            self::OutputDeviceSearchParameter($dataObject);
        }
    }
    static function OutputDomainCategory($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputDomainCategory * * *");
            self::OutputStatusMessage(sprintf("Bid: %s", $dataObject->Bid));
            self::OutputStatusMessage(sprintf("CategoryName: %s", $dataObject->CategoryName));
            self::OutputStatusMessage(sprintf("Coverage: %s", $dataObject->Coverage));
            self::OutputStatusMessage("* * * End OutputDomainCategory * * *");
        }
    }
    static function OutputArrayOfDomainCategory($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DomainCategory))
        {
            return;
        }
        foreach ($dataObjects->DomainCategory as $dataObject)
        {
            self::OutputDomainCategory($dataObject);
        }
    }
    static function OutputEstimatedBidAndTraffic($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputEstimatedBidAndTraffic * * *");
            self::OutputStatusMessage(sprintf("MinClicksPerWeek: %s", $dataObject->MinClicksPerWeek));
            self::OutputStatusMessage(sprintf("MaxClicksPerWeek: %s", $dataObject->MaxClicksPerWeek));
            self::OutputStatusMessage(sprintf("AverageCPC: %s", $dataObject->AverageCPC));
            self::OutputStatusMessage(sprintf("MinImpressionsPerWeek: %s", $dataObject->MinImpressionsPerWeek));
            self::OutputStatusMessage(sprintf("MaxImpressionsPerWeek: %s", $dataObject->MaxImpressionsPerWeek));
            self::OutputStatusMessage(sprintf("CTR: %s", $dataObject->CTR));
            self::OutputStatusMessage(sprintf("MinTotalCostPerWeek: %s", $dataObject->MinTotalCostPerWeek));
            self::OutputStatusMessage(sprintf("MaxTotalCostPerWeek: %s", $dataObject->MaxTotalCostPerWeek));
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("EstimatedMinBid: %s", $dataObject->EstimatedMinBid));
            self::OutputStatusMessage("* * * End OutputEstimatedBidAndTraffic * * *");
        }
    }
    static function OutputArrayOfEstimatedBidAndTraffic($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EstimatedBidAndTraffic))
        {
            return;
        }
        foreach ($dataObjects->EstimatedBidAndTraffic as $dataObject)
        {
            self::OutputEstimatedBidAndTraffic($dataObject);
        }
    }
    static function OutputEstimatedPositionAndTraffic($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputEstimatedPositionAndTraffic * * *");
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("MinClicksPerWeek: %s", $dataObject->MinClicksPerWeek));
            self::OutputStatusMessage(sprintf("MaxClicksPerWeek: %s", $dataObject->MaxClicksPerWeek));
            self::OutputStatusMessage(sprintf("AverageCPC: %s", $dataObject->AverageCPC));
            self::OutputStatusMessage(sprintf("MinImpressionsPerWeek: %s", $dataObject->MinImpressionsPerWeek));
            self::OutputStatusMessage(sprintf("MaxImpressionsPerWeek: %s", $dataObject->MaxImpressionsPerWeek));
            self::OutputStatusMessage(sprintf("CTR: %s", $dataObject->CTR));
            self::OutputStatusMessage(sprintf("MinTotalCostPerWeek: %s", $dataObject->MinTotalCostPerWeek));
            self::OutputStatusMessage(sprintf("MaxTotalCostPerWeek: %s", $dataObject->MaxTotalCostPerWeek));
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("EstimatedAdPosition: %s", $dataObject->EstimatedAdPosition));
            self::OutputStatusMessage("* * * End OutputEstimatedPositionAndTraffic * * *");
        }
    }
    static function OutputArrayOfEstimatedPositionAndTraffic($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EstimatedPositionAndTraffic))
        {
            return;
        }
        foreach ($dataObjects->EstimatedPositionAndTraffic as $dataObject)
        {
            self::OutputEstimatedPositionAndTraffic($dataObject);
        }
    }
    static function OutputExcludeAccountKeywordsSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputExcludeAccountKeywordsSearchParameter * * *");
            self::OutputStatusMessage(sprintf("ExcludeAccountKeywords: %s", $dataObject->ExcludeAccountKeywords));
            self::OutputStatusMessage("* * * End OutputExcludeAccountKeywordsSearchParameter * * *");
        }
    }
    static function OutputArrayOfExcludeAccountKeywordsSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ExcludeAccountKeywordsSearchParameter))
        {
            return;
        }
        foreach ($dataObjects->ExcludeAccountKeywordsSearchParameter as $dataObject)
        {
            self::OutputExcludeAccountKeywordsSearchParameter($dataObject);
        }
    }
    static function OutputHistoricalSearchCountPeriodic($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputHistoricalSearchCountPeriodic * * *");
            self::OutputStatusMessage(sprintf("SearchCount: %s", $dataObject->SearchCount));
            self::OutputStatusMessage("DayMonthAndYear:");
            self::OutputDayMonthAndYear($dataObject->DayMonthAndYear);
            self::OutputStatusMessage("* * * End OutputHistoricalSearchCountPeriodic * * *");
        }
    }
    static function OutputArrayOfHistoricalSearchCountPeriodic($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->HistoricalSearchCountPeriodic))
        {
            return;
        }
        foreach ($dataObjects->HistoricalSearchCountPeriodic as $dataObject)
        {
            self::OutputHistoricalSearchCountPeriodic($dataObject);
        }
    }
    static function OutputIdeaTextSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputIdeaTextSearchParameter * * *");
            self::OutputStatusMessage("Excluded:");
            self::OutputArrayOfKeyword($dataObject->Excluded);
            self::OutputStatusMessage("Included:");
            self::OutputArrayOfKeyword($dataObject->Included);
            self::OutputStatusMessage("* * * End OutputIdeaTextSearchParameter * * *");
        }
    }
    static function OutputArrayOfIdeaTextSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->IdeaTextSearchParameter))
        {
            return;
        }
        foreach ($dataObjects->IdeaTextSearchParameter as $dataObject)
        {
            self::OutputIdeaTextSearchParameter($dataObject);
        }
    }
    static function OutputImpressionShareSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputImpressionShareSearchParameter * * *");
            self::OutputStatusMessage(sprintf("Maximum: %s", $dataObject->Maximum));
            self::OutputStatusMessage(sprintf("Minimum: %s", $dataObject->Minimum));
            self::OutputStatusMessage("* * * End OutputImpressionShareSearchParameter * * *");
        }
    }
    static function OutputArrayOfImpressionShareSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ImpressionShareSearchParameter))
        {
            return;
        }
        foreach ($dataObjects->ImpressionShareSearchParameter as $dataObject)
        {
            self::OutputImpressionShareSearchParameter($dataObject);
        }
    }
    static function OutputKeyword($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeyword * * *");
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage("* * * End OutputKeyword * * *");
        }
    }
    static function OutputArrayOfKeyword($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Keyword))
        {
            return;
        }
        foreach ($dataObjects->Keyword as $dataObject)
        {
            self::OutputKeyword($dataObject);
        }
    }
    static function OutputKeywordAndConfidence($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordAndConfidence * * *");
            self::OutputStatusMessage(sprintf("SuggestedKeyword: %s", $dataObject->SuggestedKeyword));
            self::OutputStatusMessage(sprintf("ConfidenceScore: %s", $dataObject->ConfidenceScore));
            self::OutputStatusMessage("* * * End OutputKeywordAndConfidence * * *");
        }
    }
    static function OutputArrayOfKeywordAndConfidence($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordAndConfidence))
        {
            return;
        }
        foreach ($dataObjects->KeywordAndConfidence as $dataObject)
        {
            self::OutputKeywordAndConfidence($dataObject);
        }
    }
    static function OutputKeywordAndMatchType($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordAndMatchType * * *");
            self::OutputStatusMessage(sprintf("KeywordText: %s", $dataObject->KeywordText));
            self::OutputStatusMessage("MatchTypes:");
            self::OutputArrayOfMatchType($dataObject->MatchTypes);
            self::OutputStatusMessage("* * * End OutputKeywordAndMatchType * * *");
        }
    }
    static function OutputArrayOfKeywordAndMatchType($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordAndMatchType))
        {
            return;
        }
        foreach ($dataObjects->KeywordAndMatchType as $dataObject)
        {
            self::OutputKeywordAndMatchType($dataObject);
        }
    }
    static function OutputKeywordBidLandscape($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordBidLandscape * * *");
            self::OutputStatusMessage(sprintf("KeywordId: %s", $dataObject->KeywordId));
            self::OutputStatusMessage("StartDate:");
            self::OutputDayMonthAndYear($dataObject->StartDate);
            self::OutputStatusMessage("EndDate:");
            self::OutputDayMonthAndYear($dataObject->EndDate);
            self::OutputStatusMessage("BidLandscapePoints:");
            self::OutputArrayOfBidLandscapePoint($dataObject->BidLandscapePoints);
            self::OutputStatusMessage("* * * End OutputKeywordBidLandscape * * *");
        }
    }
    static function OutputArrayOfKeywordBidLandscape($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordBidLandscape))
        {
            return;
        }
        foreach ($dataObjects->KeywordBidLandscape as $dataObject)
        {
            self::OutputKeywordBidLandscape($dataObject);
        }
    }
    static function OutputKeywordCategory($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordCategory * * *");
            self::OutputStatusMessage(sprintf("Category: %s", $dataObject->Category));
            self::OutputStatusMessage(sprintf("ConfidenceScore: %s", $dataObject->ConfidenceScore));
            self::OutputStatusMessage("* * * End OutputKeywordCategory * * *");
        }
    }
    static function OutputArrayOfKeywordCategory($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordCategory))
        {
            return;
        }
        foreach ($dataObjects->KeywordCategory as $dataObject)
        {
            self::OutputKeywordCategory($dataObject);
        }
    }
    static function OutputKeywordCategoryResult($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordCategoryResult * * *");
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputStatusMessage("KeywordCategories:");
            self::OutputArrayOfKeywordCategory($dataObject->KeywordCategories);
            self::OutputStatusMessage("* * * End OutputKeywordCategoryResult * * *");
        }
    }
    static function OutputArrayOfKeywordCategoryResult($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordCategoryResult))
        {
            return;
        }
        foreach ($dataObjects->KeywordCategoryResult as $dataObject)
        {
            self::OutputKeywordCategoryResult($dataObject);
        }
    }
    static function OutputKeywordDemographic($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordDemographic * * *");
            self::OutputStatusMessage(sprintf("Device: %s", $dataObject->Device));
            self::OutputStatusMessage(sprintf("EighteenToTwentyFour: %s", $dataObject->EighteenToTwentyFour));
            self::OutputStatusMessage(sprintf("TwentyFiveToThirtyFour: %s", $dataObject->TwentyFiveToThirtyFour));
            self::OutputStatusMessage(sprintf("ThirtyFiveToFourtyNine: %s", $dataObject->ThirtyFiveToFourtyNine));
            self::OutputStatusMessage(sprintf("FiftyToSixtyFour: %s", $dataObject->FiftyToSixtyFour));
            self::OutputStatusMessage(sprintf("SixtyFiveAndAbove: %s", $dataObject->SixtyFiveAndAbove));
            self::OutputStatusMessage(sprintf("AgeUnknown: %s", $dataObject->AgeUnknown));
            self::OutputStatusMessage(sprintf("Female: %s", $dataObject->Female));
            self::OutputStatusMessage(sprintf("Male: %s", $dataObject->Male));
            self::OutputStatusMessage(sprintf("GenderUnknown: %s", $dataObject->GenderUnknown));
            self::OutputStatusMessage("* * * End OutputKeywordDemographic * * *");
        }
    }
    static function OutputArrayOfKeywordDemographic($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordDemographic))
        {
            return;
        }
        foreach ($dataObjects->KeywordDemographic as $dataObject)
        {
            self::OutputKeywordDemographic($dataObject);
        }
    }
    static function OutputKeywordDemographicResult($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordDemographicResult * * *");
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputStatusMessage("KeywordDemographics:");
            self::OutputArrayOfKeywordDemographic($dataObject->KeywordDemographics);
            self::OutputStatusMessage("* * * End OutputKeywordDemographicResult * * *");
        }
    }
    static function OutputArrayOfKeywordDemographicResult($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordDemographicResult))
        {
            return;
        }
        foreach ($dataObjects->KeywordDemographicResult as $dataObject)
        {
            self::OutputKeywordDemographicResult($dataObject);
        }
    }
    static function OutputKeywordEstimate($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordEstimate * * *");
            self::OutputStatusMessage("Keyword:");
            self::OutputKeyword($dataObject->Keyword);
            self::OutputStatusMessage("Maximum:");
            self::OutputTrafficEstimate($dataObject->Maximum);
            self::OutputStatusMessage("Minimum:");
            self::OutputTrafficEstimate($dataObject->Minimum);
            self::OutputStatusMessage("* * * End OutputKeywordEstimate * * *");
        }
    }
    static function OutputArrayOfKeywordEstimate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordEstimate))
        {
            return;
        }
        foreach ($dataObjects->KeywordEstimate as $dataObject)
        {
            self::OutputKeywordEstimate($dataObject);
        }
    }
    static function OutputKeywordEstimatedBid($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordEstimatedBid * * *");
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputStatusMessage("EstimatedBids:");
            self::OutputArrayOfEstimatedBidAndTraffic($dataObject->EstimatedBids);
            self::OutputStatusMessage("* * * End OutputKeywordEstimatedBid * * *");
        }
    }
    static function OutputArrayOfKeywordEstimatedBid($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordEstimatedBid))
        {
            return;
        }
        foreach ($dataObjects->KeywordEstimatedBid as $dataObject)
        {
            self::OutputKeywordEstimatedBid($dataObject);
        }
    }
    static function OutputKeywordEstimatedPosition($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordEstimatedPosition * * *");
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputStatusMessage("EstimatedPositions:");
            self::OutputArrayOfEstimatedPositionAndTraffic($dataObject->EstimatedPositions);
            self::OutputStatusMessage("* * * End OutputKeywordEstimatedPosition * * *");
        }
    }
    static function OutputArrayOfKeywordEstimatedPosition($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordEstimatedPosition))
        {
            return;
        }
        foreach ($dataObjects->KeywordEstimatedPosition as $dataObject)
        {
            self::OutputKeywordEstimatedPosition($dataObject);
        }
    }
    static function OutputKeywordEstimator($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordEstimator * * *");
            self::OutputStatusMessage("Keyword:");
            self::OutputKeyword($dataObject->Keyword);
            self::OutputStatusMessage(sprintf("MaxCpc: %s", $dataObject->MaxCpc));
            self::OutputStatusMessage("* * * End OutputKeywordEstimator * * *");
        }
    }
    static function OutputArrayOfKeywordEstimator($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordEstimator))
        {
            return;
        }
        foreach ($dataObjects->KeywordEstimator as $dataObject)
        {
            self::OutputKeywordEstimator($dataObject);
        }
    }
    static function OutputKeywordHistoricalPerformance($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordHistoricalPerformance * * *");
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputStatusMessage("KeywordKPIs:");
            self::OutputArrayOfKeywordKPI($dataObject->KeywordKPIs);
            self::OutputStatusMessage("* * * End OutputKeywordHistoricalPerformance * * *");
        }
    }
    static function OutputArrayOfKeywordHistoricalPerformance($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordHistoricalPerformance))
        {
            return;
        }
        foreach ($dataObjects->KeywordHistoricalPerformance as $dataObject)
        {
            self::OutputKeywordHistoricalPerformance($dataObject);
        }
    }
    static function OutputKeywordIdea($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordIdea * * *");
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage(sprintf("AdGroupName: %s", $dataObject->AdGroupName));
            self::OutputStatusMessage(sprintf("AdImpressionShare: %s", $dataObject->AdImpressionShare));
            self::OutputStatusMessage(sprintf("Competition: %s", $dataObject->Competition));
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputStatusMessage("MonthlySearchCounts:");
            self::OutputArrayOfLong($dataObject->MonthlySearchCounts);
            self::OutputStatusMessage(sprintf("Relevance: %s", $dataObject->Relevance));
            self::OutputStatusMessage(sprintf("Source: %s", $dataObject->Source));
            self::OutputStatusMessage(sprintf("SuggestedBid: %s", $dataObject->SuggestedBid));
            self::OutputStatusMessage("* * * End OutputKeywordIdea * * *");
        }
    }
    static function OutputArrayOfKeywordIdea($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordIdea))
        {
            return;
        }
        foreach ($dataObjects->KeywordIdea as $dataObject)
        {
            self::OutputKeywordIdea($dataObject);
        }
    }
    static function OutputKeywordIdeaCategory($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordIdeaCategory * * *");
            self::OutputStatusMessage(sprintf("CategoryId: %s", $dataObject->CategoryId));
            self::OutputStatusMessage(sprintf("CategoryName: %s", $dataObject->CategoryName));
            self::OutputStatusMessage("* * * End OutputKeywordIdeaCategory * * *");
        }
    }
    static function OutputArrayOfKeywordIdeaCategory($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordIdeaCategory))
        {
            return;
        }
        foreach ($dataObjects->KeywordIdeaCategory as $dataObject)
        {
            self::OutputKeywordIdeaCategory($dataObject);
        }
    }
    static function OutputKeywordIdEstimatedBid($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordIdEstimatedBid * * *");
            self::OutputStatusMessage(sprintf("KeywordId: %s", $dataObject->KeywordId));
            self::OutputStatusMessage("KeywordEstimatedBid:");
            self::OutputKeywordEstimatedBid($dataObject->KeywordEstimatedBid);
            self::OutputStatusMessage("* * * End OutputKeywordIdEstimatedBid * * *");
        }
    }
    static function OutputArrayOfKeywordIdEstimatedBid($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordIdEstimatedBid))
        {
            return;
        }
        foreach ($dataObjects->KeywordIdEstimatedBid as $dataObject)
        {
            self::OutputKeywordIdEstimatedBid($dataObject);
        }
    }
    static function OutputKeywordIdEstimatedPosition($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordIdEstimatedPosition * * *");
            self::OutputStatusMessage(sprintf("KeywordId: %s", $dataObject->KeywordId));
            self::OutputStatusMessage("KeywordEstimatedPosition:");
            self::OutputKeywordEstimatedPosition($dataObject->KeywordEstimatedPosition);
            self::OutputStatusMessage("* * * End OutputKeywordIdEstimatedPosition * * *");
        }
    }
    static function OutputArrayOfKeywordIdEstimatedPosition($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordIdEstimatedPosition))
        {
            return;
        }
        foreach ($dataObjects->KeywordIdEstimatedPosition as $dataObject)
        {
            self::OutputKeywordIdEstimatedPosition($dataObject);
        }
    }
    static function OutputKeywordKPI($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordKPI * * *");
            self::OutputStatusMessage(sprintf("Device: %s", $dataObject->Device));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("AdPosition: %s", $dataObject->AdPosition));
            self::OutputStatusMessage(sprintf("Clicks: %s", $dataObject->Clicks));
            self::OutputStatusMessage(sprintf("Impressions: %s", $dataObject->Impressions));
            self::OutputStatusMessage(sprintf("AverageCPC: %s", $dataObject->AverageCPC));
            self::OutputStatusMessage(sprintf("CTR: %s", $dataObject->CTR));
            self::OutputStatusMessage(sprintf("TotalCost: %s", $dataObject->TotalCost));
            self::OutputStatusMessage(sprintf("AverageBid: %s", $dataObject->AverageBid));
            self::OutputStatusMessage("* * * End OutputKeywordKPI * * *");
        }
    }
    static function OutputArrayOfKeywordKPI($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordKPI))
        {
            return;
        }
        foreach ($dataObjects->KeywordKPI as $dataObject)
        {
            self::OutputKeywordKPI($dataObject);
        }
    }
    static function OutputKeywordLocation($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordLocation * * *");
            self::OutputStatusMessage(sprintf("Device: %s", $dataObject->Device));
            self::OutputStatusMessage(sprintf("Location: %s", $dataObject->Location));
            self::OutputStatusMessage(sprintf("Percentage: %s", $dataObject->Percentage));
            self::OutputStatusMessage("* * * End OutputKeywordLocation * * *");
        }
    }
    static function OutputArrayOfKeywordLocation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordLocation))
        {
            return;
        }
        foreach ($dataObjects->KeywordLocation as $dataObject)
        {
            self::OutputKeywordLocation($dataObject);
        }
    }
    static function OutputKeywordLocationResult($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordLocationResult * * *");
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputStatusMessage("KeywordLocations:");
            self::OutputArrayOfKeywordLocation($dataObject->KeywordLocations);
            self::OutputStatusMessage("* * * End OutputKeywordLocationResult * * *");
        }
    }
    static function OutputArrayOfKeywordLocationResult($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordLocationResult))
        {
            return;
        }
        foreach ($dataObjects->KeywordLocationResult as $dataObject)
        {
            self::OutputKeywordLocationResult($dataObject);
        }
    }
    static function OutputKeywordOpportunity($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordOpportunity * * *");
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage(sprintf("AdGroupName: %s", $dataObject->AdGroupName));
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage(sprintf("CampaignName: %s", $dataObject->CampaignName));
            self::OutputStatusMessage(sprintf("Competition: %s", $dataObject->Competition));
            self::OutputStatusMessage(sprintf("EstimatedIncreaseInClicks: %s", $dataObject->EstimatedIncreaseInClicks));
            self::OutputStatusMessage(sprintf("EstimatedIncreaseInCost: %s", $dataObject->EstimatedIncreaseInCost));
            self::OutputStatusMessage(sprintf("EstimatedIncreaseInImpressions: %s", $dataObject->EstimatedIncreaseInImpressions));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("MonthlySearches: %s", $dataObject->MonthlySearches));
            self::OutputStatusMessage(sprintf("SuggestedBid: %s", $dataObject->SuggestedBid));
            self::OutputStatusMessage(sprintf("SuggestedKeyword: %s", $dataObject->SuggestedKeyword));
            if($dataObject->Type === "BroadMatchKeywordOpportunity")
            {
                self::OutputBroadMatchKeywordOpportunity($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputKeywordOpportunity * * *");
        }
    }
    static function OutputArrayOfKeywordOpportunity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordOpportunity))
        {
            return;
        }
        foreach ($dataObjects->KeywordOpportunity as $dataObject)
        {
            self::OutputKeywordOpportunity($dataObject);
        }
    }
    static function OutputKeywordSearchCount($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordSearchCount * * *");
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputStatusMessage("SearchCountsByAttributes:");
            self::OutputArrayOfSearchCountsByAttributes($dataObject->SearchCountsByAttributes);
            self::OutputStatusMessage("* * * End OutputKeywordSearchCount * * *");
        }
    }
    static function OutputArrayOfKeywordSearchCount($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordSearchCount))
        {
            return;
        }
        foreach ($dataObjects->KeywordSearchCount as $dataObject)
        {
            self::OutputKeywordSearchCount($dataObject);
        }
    }
    static function OutputKeywordSuggestion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputKeywordSuggestion * * *");
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputStatusMessage("SuggestionsAndConfidence:");
            self::OutputArrayOfKeywordAndConfidence($dataObject->SuggestionsAndConfidence);
            self::OutputStatusMessage("* * * End OutputKeywordSuggestion * * *");
        }
    }
    static function OutputArrayOfKeywordSuggestion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordSuggestion))
        {
            return;
        }
        foreach ($dataObjects->KeywordSuggestion as $dataObject)
        {
            self::OutputKeywordSuggestion($dataObject);
        }
    }
    static function OutputLanguageCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputLanguageCriterion * * *");
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
            self::OutputStatusMessage("* * * End OutputLanguageCriterion * * *");
        }
    }
    static function OutputArrayOfLanguageCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LanguageCriterion))
        {
            return;
        }
        foreach ($dataObjects->LanguageCriterion as $dataObject)
        {
            self::OutputLanguageCriterion($dataObject);
        }
    }
    static function OutputLanguageSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputLanguageSearchParameter * * *");
            self::OutputStatusMessage("Languages:");
            self::OutputArrayOfLanguageCriterion($dataObject->Languages);
            self::OutputStatusMessage("* * * End OutputLanguageSearchParameter * * *");
        }
    }
    static function OutputArrayOfLanguageSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LanguageSearchParameter))
        {
            return;
        }
        foreach ($dataObjects->LanguageSearchParameter as $dataObject)
        {
            self::OutputLanguageSearchParameter($dataObject);
        }
    }
    static function OutputLocationCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputLocationCriterion * * *");
            self::OutputStatusMessage(sprintf("LocationId: %s", $dataObject->LocationId));
            self::OutputStatusMessage("* * * End OutputLocationCriterion * * *");
        }
    }
    static function OutputArrayOfLocationCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LocationCriterion))
        {
            return;
        }
        foreach ($dataObjects->LocationCriterion as $dataObject)
        {
            self::OutputLocationCriterion($dataObject);
        }
    }
    static function OutputLocationSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputLocationSearchParameter * * *");
            self::OutputStatusMessage("Locations:");
            self::OutputArrayOfLocationCriterion($dataObject->Locations);
            self::OutputStatusMessage("* * * End OutputLocationSearchParameter * * *");
        }
    }
    static function OutputArrayOfLocationSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LocationSearchParameter))
        {
            return;
        }
        foreach ($dataObjects->LocationSearchParameter as $dataObject)
        {
            self::OutputLocationSearchParameter($dataObject);
        }
    }
    static function OutputNegativeKeyword($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputNegativeKeyword * * *");
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
            self::OutputStatusMessage("* * * End OutputNegativeKeyword * * *");
        }
    }
    static function OutputArrayOfNegativeKeyword($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeKeyword))
        {
            return;
        }
        foreach ($dataObjects->NegativeKeyword as $dataObject)
        {
            self::OutputNegativeKeyword($dataObject);
        }
    }
    static function OutputNetworkCriterion($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputNetworkCriterion * * *");
            self::OutputStatusMessage(sprintf("Network: %s", $dataObject->Network));
            self::OutputStatusMessage("* * * End OutputNetworkCriterion * * *");
        }
    }
    static function OutputArrayOfNetworkCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NetworkCriterion))
        {
            return;
        }
        foreach ($dataObjects->NetworkCriterion as $dataObject)
        {
            self::OutputNetworkCriterion($dataObject);
        }
    }
    static function OutputNetworkSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputNetworkSearchParameter * * *");
            self::OutputStatusMessage("Network:");
            self::OutputNetworkCriterion($dataObject->Network);
            self::OutputStatusMessage("* * * End OutputNetworkSearchParameter * * *");
        }
    }
    static function OutputArrayOfNetworkSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NetworkSearchParameter))
        {
            return;
        }
        foreach ($dataObjects->NetworkSearchParameter as $dataObject)
        {
            self::OutputNetworkSearchParameter($dataObject);
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
    static function OutputOpportunity($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputOpportunity * * *");
            self::OutputStatusMessage(sprintf("OpportunityKey: %s", $dataObject->OpportunityKey));
            if($dataObject->Type === "BidOpportunity")
            {
                self::OutputBidOpportunity($dataObject);
            }
            if($dataObject->Type === "BudgetOpportunity")
            {
                self::OutputBudgetOpportunity($dataObject);
            }
            if($dataObject->Type === "KeywordOpportunity")
            {
                self::OutputKeywordOpportunity($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputOpportunity * * *");
        }
    }
    static function OutputArrayOfOpportunity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Opportunity))
        {
            return;
        }
        foreach ($dataObjects->Opportunity as $dataObject)
        {
            self::OutputOpportunity($dataObject);
        }
    }
    static function OutputQuerySearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputQuerySearchParameter * * *");
            self::OutputStatusMessage("Queries:");
            self::OutputArrayOfString($dataObject->Queries);
            self::OutputStatusMessage("* * * End OutputQuerySearchParameter * * *");
        }
    }
    static function OutputArrayOfQuerySearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->QuerySearchParameter))
        {
            return;
        }
        foreach ($dataObjects->QuerySearchParameter as $dataObject)
        {
            self::OutputQuerySearchParameter($dataObject);
        }
    }
    static function OutputSearchCountsByAttributes($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSearchCountsByAttributes * * *");
            self::OutputStatusMessage(sprintf("Device: %s", $dataObject->Device));
            self::OutputStatusMessage("HistoricalSearchCounts:");
            self::OutputArrayOfHistoricalSearchCountPeriodic($dataObject->HistoricalSearchCounts);
            self::OutputStatusMessage("* * * End OutputSearchCountsByAttributes * * *");
        }
    }
    static function OutputArrayOfSearchCountsByAttributes($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchCountsByAttributes))
        {
            return;
        }
        foreach ($dataObjects->SearchCountsByAttributes as $dataObject)
        {
            self::OutputSearchCountsByAttributes($dataObject);
        }
    }
    static function OutputSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSearchParameter * * *");
            if($dataObject->Type === "AuctionSegmentSearchParameter")
            {
                self::OutputAuctionSegmentSearchParameter($dataObject);
            }
            if($dataObject->Type === "CategorySearchParameter")
            {
                self::OutputCategorySearchParameter($dataObject);
            }
            if($dataObject->Type === "CompetitionSearchParameter")
            {
                self::OutputCompetitionSearchParameter($dataObject);
            }
            if($dataObject->Type === "DateRangeSearchParameter")
            {
                self::OutputDateRangeSearchParameter($dataObject);
            }
            if($dataObject->Type === "DeviceSearchParameter")
            {
                self::OutputDeviceSearchParameter($dataObject);
            }
            if($dataObject->Type === "ExcludeAccountKeywordsSearchParameter")
            {
                self::OutputExcludeAccountKeywordsSearchParameter($dataObject);
            }
            if($dataObject->Type === "IdeaTextSearchParameter")
            {
                self::OutputIdeaTextSearchParameter($dataObject);
            }
            if($dataObject->Type === "ImpressionShareSearchParameter")
            {
                self::OutputImpressionShareSearchParameter($dataObject);
            }
            if($dataObject->Type === "LanguageSearchParameter")
            {
                self::OutputLanguageSearchParameter($dataObject);
            }
            if($dataObject->Type === "LocationSearchParameter")
            {
                self::OutputLocationSearchParameter($dataObject);
            }
            if($dataObject->Type === "NetworkSearchParameter")
            {
                self::OutputNetworkSearchParameter($dataObject);
            }
            if($dataObject->Type === "QuerySearchParameter")
            {
                self::OutputQuerySearchParameter($dataObject);
            }
            if($dataObject->Type === "SearchVolumeSearchParameter")
            {
                self::OutputSearchVolumeSearchParameter($dataObject);
            }
            if($dataObject->Type === "SuggestedBidSearchParameter")
            {
                self::OutputSuggestedBidSearchParameter($dataObject);
            }
            if($dataObject->Type === "UrlSearchParameter")
            {
                self::OutputUrlSearchParameter($dataObject);
            }
            self::OutputStatusMessage("* * * End OutputSearchParameter * * *");
        }
    }
    static function OutputArrayOfSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchParameter))
        {
            return;
        }
        foreach ($dataObjects->SearchParameter as $dataObject)
        {
            self::OutputSearchParameter($dataObject);
        }
    }
    static function OutputSearchVolumeSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSearchVolumeSearchParameter * * *");
            self::OutputStatusMessage(sprintf("Maximum: %s", $dataObject->Maximum));
            self::OutputStatusMessage(sprintf("Minimum: %s", $dataObject->Minimum));
            self::OutputStatusMessage("* * * End OutputSearchVolumeSearchParameter * * *");
        }
    }
    static function OutputArrayOfSearchVolumeSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchVolumeSearchParameter))
        {
            return;
        }
        foreach ($dataObjects->SearchVolumeSearchParameter as $dataObject)
        {
            self::OutputSearchVolumeSearchParameter($dataObject);
        }
    }
    static function OutputSuggestedBidSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputSuggestedBidSearchParameter * * *");
            self::OutputStatusMessage(sprintf("Maximum: %s", $dataObject->Maximum));
            self::OutputStatusMessage(sprintf("Minimum: %s", $dataObject->Minimum));
            self::OutputStatusMessage("* * * End OutputSuggestedBidSearchParameter * * *");
        }
    }
    static function OutputArrayOfSuggestedBidSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SuggestedBidSearchParameter))
        {
            return;
        }
        foreach ($dataObjects->SuggestedBidSearchParameter as $dataObject)
        {
            self::OutputSuggestedBidSearchParameter($dataObject);
        }
    }
    static function OutputTrafficEstimate($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputTrafficEstimate * * *");
            self::OutputStatusMessage(sprintf("AverageCpc: %s", $dataObject->AverageCpc));
            self::OutputStatusMessage(sprintf("AveragePosition: %s", $dataObject->AveragePosition));
            self::OutputStatusMessage(sprintf("Clicks: %s", $dataObject->Clicks));
            self::OutputStatusMessage(sprintf("Ctr: %s", $dataObject->Ctr));
            self::OutputStatusMessage(sprintf("Impressions: %s", $dataObject->Impressions));
            self::OutputStatusMessage(sprintf("TotalCost: %s", $dataObject->TotalCost));
            self::OutputStatusMessage("* * * End OutputTrafficEstimate * * *");
        }
    }
    static function OutputArrayOfTrafficEstimate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TrafficEstimate))
        {
            return;
        }
        foreach ($dataObjects->TrafficEstimate as $dataObject)
        {
            self::OutputTrafficEstimate($dataObject);
        }
    }
    static function OutputUrlSearchParameter($dataObject)
    {
        if (!empty($dataObject))
        {
            self::OutputStatusMessage("* * * Begin OutputUrlSearchParameter * * *");
            self::OutputStatusMessage(sprintf("Url: %s", $dataObject->Url));
            self::OutputStatusMessage("* * * End OutputUrlSearchParameter * * *");
        }
    }
    static function OutputArrayOfUrlSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UrlSearchParameter))
        {
            return;
        }
        foreach ($dataObjects->UrlSearchParameter as $dataObject)
        {
            self::OutputUrlSearchParameter($dataObject);
        }
    }
    static function OutputBidOpportunityType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputBidOpportunityType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputBidOpportunityType * * *");
    }
    static function OutputArrayOfBidOpportunityType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBidOpportunityType * * *");
        foreach ($valueSets->BidOpportunityType as $valueSet)
        {
            self::OutputBidOpportunityType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBidOpportunityType * * *");
    }
    static function OutputBudgetPointType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputBudgetPointType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputBudgetPointType * * *");
    }
    static function OutputArrayOfBudgetPointType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBudgetPointType * * *");
        foreach ($valueSets->BudgetPointType as $valueSet)
        {
            self::OutputBudgetPointType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBudgetPointType * * *");
    }
    static function OutputBudgetLimitType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputBudgetLimitType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputBudgetLimitType * * *");
    }
    static function OutputArrayOfBudgetLimitType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBudgetLimitType * * *");
        foreach ($valueSets->BudgetLimitType as $valueSet)
        {
            self::OutputBudgetLimitType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBudgetLimitType * * *");
    }
    static function OutputKeywordOpportunityType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordOpportunityType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputKeywordOpportunityType * * *");
    }
    static function OutputArrayOfKeywordOpportunityType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordOpportunityType * * *");
        foreach ($valueSets->KeywordOpportunityType as $valueSet)
        {
            self::OutputKeywordOpportunityType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordOpportunityType * * *");
    }
    static function OutputTargetAdPosition($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputTargetAdPosition * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputTargetAdPosition * * *");
    }
    static function OutputArrayOfTargetAdPosition($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfTargetAdPosition * * *");
        foreach ($valueSets->TargetAdPosition as $valueSet)
        {
            self::OutputTargetAdPosition($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfTargetAdPosition * * *");
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
    static function OutputMatchType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputMatchType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputMatchType * * *");
    }
    static function OutputArrayOfMatchType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfMatchType * * *");
        foreach ($valueSets->MatchType as $valueSet)
        {
            self::OutputMatchType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfMatchType * * *");
    }
    static function OutputAdGroupBidLandscapeType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupBidLandscapeType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupBidLandscapeType * * *");
    }
    static function OutputArrayOfAdGroupBidLandscapeType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupBidLandscapeType * * *");
        foreach ($valueSets->AdGroupBidLandscapeType as $valueSet)
        {
            self::OutputAdGroupBidLandscapeType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupBidLandscapeType * * *");
    }
    static function OutputTimeInterval($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputTimeInterval * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputTimeInterval * * *");
    }
    static function OutputArrayOfTimeInterval($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfTimeInterval * * *");
        foreach ($valueSets->TimeInterval as $valueSet)
        {
            self::OutputTimeInterval($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfTimeInterval * * *");
    }
    static function OutputAdPosition($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAdPosition * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAdPosition * * *");
    }
    static function OutputArrayOfAdPosition($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdPosition * * *");
        foreach ($valueSets->AdPosition as $valueSet)
        {
            self::OutputAdPosition($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdPosition * * *");
    }
    static function OutputEntityType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputEntityType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputEntityType * * *");
    }
    static function OutputArrayOfEntityType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEntityType * * *");
        foreach ($valueSets->EntityType as $valueSet)
        {
            self::OutputEntityType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEntityType * * *");
    }
    static function OutputNetworkType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputNetworkType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputNetworkType * * *");
    }
    static function OutputArrayOfNetworkType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNetworkType * * *");
        foreach ($valueSets->NetworkType as $valueSet)
        {
            self::OutputNetworkType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNetworkType * * *");
    }
    static function OutputCompetitionLevel($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputCompetitionLevel * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputCompetitionLevel * * *");
    }
    static function OutputArrayOfCompetitionLevel($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCompetitionLevel * * *");
        foreach ($valueSets->CompetitionLevel as $valueSet)
        {
            self::OutputCompetitionLevel($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCompetitionLevel * * *");
    }
    static function OutputAuctionSegment($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAuctionSegment * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAuctionSegment * * *");
    }
    static function OutputArrayOfAuctionSegment($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAuctionSegment * * *");
        foreach ($valueSets->AuctionSegment as $valueSet)
        {
            self::OutputAuctionSegment($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAuctionSegment * * *");
    }
    static function OutputAuctionInsightKpiAdditionalField($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputAuctionInsightKpiAdditionalField * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputAuctionInsightKpiAdditionalField * * *");
    }
    static function OutputArrayOfAuctionInsightKpiAdditionalField($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAuctionInsightKpiAdditionalField * * *");
        foreach ($valueSets->AuctionInsightKpiAdditionalField as $valueSet)
        {
            self::OutputAuctionInsightKpiAdditionalField($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAuctionInsightKpiAdditionalField * * *");
    }
    static function OutputKeywordIdeaAttribute($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordIdeaAttribute * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputKeywordIdeaAttribute * * *");
    }
    static function OutputArrayOfKeywordIdeaAttribute($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordIdeaAttribute * * *");
        foreach ($valueSets->KeywordIdeaAttribute as $valueSet)
        {
            self::OutputKeywordIdeaAttribute($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordIdeaAttribute * * *");
    }
    static function OutputSourceType($valueSet)
    {
        self::OutputStatusMessage("* * * Begin OutputSourceType * * *");
        self::OutputStatusMessage(sprintf("Values in %s", $valueSet->type));
        foreach ($valueSet->string as $value)
        {
            self::OutputStatusMessage($value);
        }
        self::OutputStatusMessage("* * * End OutputSourceType * * *");
    }
    static function OutputArrayOfSourceType($valueSets)
    {
        if(count((array)$valueSets) == 0)
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSourceType * * *");
        foreach ($valueSets->SourceType as $valueSet)
        {
            self::OutputSourceType($valueSet);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSourceType * * *");
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
