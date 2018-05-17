<?php

namespace Microsoft\BingAds\Samples\V12;

require_once "/../vendor/autoload.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\AdInsight classes that will be used.
use Microsoft\BingAds\V12\AdInsight\GetAuctionInsightDataRequest;
use Microsoft\BingAds\V12\AdInsight\GetBidLandscapeByAdGroupIdsRequest;
use Microsoft\BingAds\V12\AdInsight\GetBidLandscapeByKeywordIdsRequest;
use Microsoft\BingAds\V12\AdInsight\GetBidOpportunitiesRequest;
use Microsoft\BingAds\V12\AdInsight\GetBudgetOpportunitiesRequest;
use Microsoft\BingAds\V12\AdInsight\GetDomainCategoriesRequest;
use Microsoft\BingAds\V12\AdInsight\GetEstimatedBidByKeywordIdsRequest;
use Microsoft\BingAds\V12\AdInsight\GetEstimatedBidByKeywordsRequest;
use Microsoft\BingAds\V12\AdInsight\GetEstimatedPositionByKeywordIdsRequest;
use Microsoft\BingAds\V12\AdInsight\GetEstimatedPositionByKeywordsRequest;
use Microsoft\BingAds\V12\AdInsight\GetHistoricalKeywordPerformanceRequest;
use Microsoft\BingAds\V12\AdInsight\GetHistoricalSearchCountRequest;
use Microsoft\BingAds\V12\AdInsight\GetKeywordCategoriesRequest;
use Microsoft\BingAds\V12\AdInsight\GetKeywordDemographicsRequest;
use Microsoft\BingAds\V12\AdInsight\GetKeywordIdeaCategoriesRequest;
use Microsoft\BingAds\V12\AdInsight\GetKeywordIdeasRequest;
use Microsoft\BingAds\V12\AdInsight\GetKeywordLocationsRequest;
use Microsoft\BingAds\V12\AdInsight\GetKeywordOpportunitiesRequest;
use Microsoft\BingAds\V12\AdInsight\GetKeywordTrafficEstimatesRequest;
use Microsoft\BingAds\V12\AdInsight\SuggestKeywordsForUrlRequest;
use Microsoft\BingAds\V12\AdInsight\SuggestKeywordsFromExistingKeywordsRequest;

final class AdInsightExampleHelper {
    static function GetAuctionInsightData(
        $entityType,
        $entityIds,
        $searchParameters)
    {
        $GLOBALS['AdInsightProxy']->SetAuthorizationData($GLOBALS['AuthorizationData']);
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetAuctionInsightDataRequest();

        $request->EntityType = $entityType;
        $request->EntityIds = $entityIds;
        $request->SearchParameters = $searchParameters;

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
    static function OutputAdGroupBidLandscape($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupBidLandscape * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage(sprintf("AdGroupBidLandscapeType: %s", $dataObject->AdGroupBidLandscapeType));
            self::OutputDayMonthAndYear($dataObject->StartDate);
            self::OutputDayMonthAndYear($dataObject->EndDate);
            self::OutputArrayOfBidLandscapePoint($dataObject->BidLandscapePoints);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupBidLandscape * * *");
    }
    static function OutputArrayOfAdGroupBidLandscape($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupBidLandscape))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupBidLandscape * * *");
        foreach ($dataObjects->AdGroupBidLandscape as $dataObject)
        {
            self::OutputAdGroupBidLandscape($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupBidLandscape * * *");
    }
    static function OutputAdGroupBidLandscapeInput($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupBidLandscapeInput * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdGroupBidLandscapeType: %s", $dataObject->AdGroupBidLandscapeType));
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
        }
        self::OutputStatusMessage("* * * End OutputAdGroupBidLandscapeInput * * *");
    }
    static function OutputArrayOfAdGroupBidLandscapeInput($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupBidLandscapeInput))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupBidLandscapeInput * * *");
        foreach ($dataObjects->AdGroupBidLandscapeInput as $dataObject)
        {
            self::OutputAdGroupBidLandscapeInput($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupBidLandscapeInput * * *");
    }
    static function OutputAdGroupEstimate($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupEstimate * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputArrayOfKeywordEstimate($dataObject->KeywordEstimates);
        }
        self::OutputStatusMessage("* * * End OutputAdGroupEstimate * * *");
    }
    static function OutputArrayOfAdGroupEstimate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupEstimate))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupEstimate * * *");
        foreach ($dataObjects->AdGroupEstimate as $dataObject)
        {
            self::OutputAdGroupEstimate($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupEstimate * * *");
    }
    static function OutputAdGroupEstimator($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAdGroupEstimator * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputArrayOfKeywordEstimator($dataObject->KeywordEstimators);
            self::OutputStatusMessage(sprintf("MaxCpc: %s", $dataObject->MaxCpc));
        }
        self::OutputStatusMessage("* * * End OutputAdGroupEstimator * * *");
    }
    static function OutputArrayOfAdGroupEstimator($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AdGroupEstimator))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAdGroupEstimator * * *");
        foreach ($dataObjects->AdGroupEstimator as $dataObject)
        {
            self::OutputAdGroupEstimator($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAdGroupEstimator * * *");
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
    static function OutputAuctionInsightEntry($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAuctionInsightEntry * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("DisplayDomain: %s", $dataObject->DisplayDomain));
            self::OutputAuctionInsightKpi($dataObject->AggregatedKpi);
            self::OutputArrayOfAuctionInsightKpi($dataObject->SegmentedKpis);
        }
        self::OutputStatusMessage("* * * End OutputAuctionInsightEntry * * *");
    }
    static function OutputArrayOfAuctionInsightEntry($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AuctionInsightEntry))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAuctionInsightEntry * * *");
        foreach ($dataObjects->AuctionInsightEntry as $dataObject)
        {
            self::OutputAuctionInsightEntry($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAuctionInsightEntry * * *");
    }
    static function OutputAuctionInsightKpi($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAuctionInsightKpi * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfString($dataObject->Segments);
            self::OutputStatusMessage(sprintf("ImpressionShare: %s", $dataObject->ImpressionShare));
            self::OutputStatusMessage(sprintf("OverlapRate: %s", $dataObject->OverlapRate));
            self::OutputStatusMessage(sprintf("AveragePosition: %s", $dataObject->AveragePosition));
            self::OutputStatusMessage(sprintf("AboveRate: %s", $dataObject->AboveRate));
            self::OutputStatusMessage(sprintf("TopOfPageRate: %s", $dataObject->TopOfPageRate));
            self::OutputStatusMessage(sprintf("OutrankingShare: %s", $dataObject->OutrankingShare));
        }
        self::OutputStatusMessage("* * * End OutputAuctionInsightKpi * * *");
    }
    static function OutputArrayOfAuctionInsightKpi($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AuctionInsightKpi))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAuctionInsightKpi * * *");
        foreach ($dataObjects->AuctionInsightKpi as $dataObject)
        {
            self::OutputAuctionInsightKpi($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAuctionInsightKpi * * *");
    }
    static function OutputAuctionInsightResult($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAuctionInsightResult * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfAuctionSegment($dataObject->Segments);
            self::OutputArrayOfAuctionInsightEntry($dataObject->Entries);
            self::OutputStatusMessage(sprintf("UsedImpressions: %s", $dataObject->UsedImpressions));
            self::OutputStatusMessage(sprintf("UsedKeywords: %s", $dataObject->UsedKeywords));
        }
        self::OutputStatusMessage("* * * End OutputAuctionInsightResult * * *");
    }
    static function OutputArrayOfAuctionInsightResult($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AuctionInsightResult))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAuctionInsightResult * * *");
        foreach ($dataObjects->AuctionInsightResult as $dataObject)
        {
            self::OutputAuctionInsightResult($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAuctionInsightResult * * *");
    }
    static function OutputAuctionSegmentSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputAuctionSegmentSearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Segment: %s", $dataObject->Segment));
        }
        self::OutputStatusMessage("* * * End OutputAuctionSegmentSearchParameter * * *");
    }
    static function OutputArrayOfAuctionSegmentSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->AuctionSegmentSearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfAuctionSegmentSearchParameter * * *");
        foreach ($dataObjects->AuctionSegmentSearchParameter as $dataObject)
        {
            self::OutputAuctionSegmentSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfAuctionSegmentSearchParameter * * *");
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
    static function OutputBidLandscapePoint($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBidLandscapePoint * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Bid: %s", $dataObject->Bid));
            self::OutputStatusMessage(sprintf("Clicks: %s", $dataObject->Clicks));
            self::OutputStatusMessage(sprintf("Impressions: %s", $dataObject->Impressions));
            self::OutputStatusMessage(sprintf("TopImpressions: %s", $dataObject->TopImpressions));
            self::OutputStatusMessage(sprintf("CurrencyCode: %s", $dataObject->CurrencyCode));
            self::OutputStatusMessage(sprintf("Cost: %s", $dataObject->Cost));
            self::OutputStatusMessage(sprintf("MarginalCPC: %s", $dataObject->MarginalCPC));
        }
        self::OutputStatusMessage("* * * End OutputBidLandscapePoint * * *");
    }
    static function OutputArrayOfBidLandscapePoint($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BidLandscapePoint))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBidLandscapePoint * * *");
        foreach ($dataObjects->BidLandscapePoint as $dataObject)
        {
            self::OutputBidLandscapePoint($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBidLandscapePoint * * *");
    }
    static function OutputBidOpportunity($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBidOpportunity * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage(sprintf("CurrentBid: %s", $dataObject->CurrentBid));
            self::OutputStatusMessage(sprintf("EstimatedIncreaseInClicks: %s", $dataObject->EstimatedIncreaseInClicks));
            self::OutputStatusMessage(sprintf("EstimatedIncreaseInCost: %s", $dataObject->EstimatedIncreaseInCost));
            self::OutputStatusMessage(sprintf("EstimatedIncreaseInImpressions: %s", $dataObject->EstimatedIncreaseInImpressions));
            self::OutputStatusMessage(sprintf("KeywordId: %s", $dataObject->KeywordId));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("SuggestedBid: %s", $dataObject->SuggestedBid));
        }
        self::OutputStatusMessage("* * * End OutputBidOpportunity * * *");
    }
    static function OutputArrayOfBidOpportunity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BidOpportunity))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBidOpportunity * * *");
        foreach ($dataObjects->BidOpportunity as $dataObject)
        {
            self::OutputBidOpportunity($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBidOpportunity * * *");
    }
    static function OutputBroadMatchKeywordOpportunity($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBroadMatchKeywordOpportunity * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AverageCPC: %s", $dataObject->AverageCPC));
            self::OutputStatusMessage(sprintf("AverageCTR: %s", $dataObject->AverageCTR));
            self::OutputStatusMessage(sprintf("ClickShare: %s", $dataObject->ClickShare));
            self::OutputStatusMessage(sprintf("ImpressionShare: %s", $dataObject->ImpressionShare));
            self::OutputStatusMessage(sprintf("ReferenceKeywordBid: %s", $dataObject->ReferenceKeywordBid));
            self::OutputStatusMessage(sprintf("ReferenceKeywordId: %s", $dataObject->ReferenceKeywordId));
            self::OutputStatusMessage(sprintf("ReferenceKeywordMatchType: %s", $dataObject->ReferenceKeywordMatchType));
            self::OutputArrayOfBroadMatchSearchQueryKPI($dataObject->SearchQueryKPIs);
        }
        self::OutputStatusMessage("* * * End OutputBroadMatchKeywordOpportunity * * *");
    }
    static function OutputArrayOfBroadMatchKeywordOpportunity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BroadMatchKeywordOpportunity))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBroadMatchKeywordOpportunity * * *");
        foreach ($dataObjects->BroadMatchKeywordOpportunity as $dataObject)
        {
            self::OutputBroadMatchKeywordOpportunity($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBroadMatchKeywordOpportunity * * *");
    }
    static function OutputBroadMatchSearchQueryKPI($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBroadMatchSearchQueryKPI * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AverageCTR: %s", $dataObject->AverageCTR));
            self::OutputStatusMessage(sprintf("Clicks: %s", $dataObject->Clicks));
            self::OutputStatusMessage(sprintf("Impressions: %s", $dataObject->Impressions));
            self::OutputStatusMessage(sprintf("SRPV: %s", $dataObject->SRPV));
            self::OutputStatusMessage(sprintf("SearchQuery: %s", $dataObject->SearchQuery));
        }
        self::OutputStatusMessage("* * * End OutputBroadMatchSearchQueryKPI * * *");
    }
    static function OutputArrayOfBroadMatchSearchQueryKPI($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BroadMatchSearchQueryKPI))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBroadMatchSearchQueryKPI * * *");
        foreach ($dataObjects->BroadMatchSearchQueryKPI as $dataObject)
        {
            self::OutputBroadMatchSearchQueryKPI($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBroadMatchSearchQueryKPI * * *");
    }
    static function OutputBudgetOpportunity($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBudgetOpportunity * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfBudgetPoint($dataObject->BudgetPoints);
            self::OutputStatusMessage(sprintf("BudgetType: %s", $dataObject->BudgetType));
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputStatusMessage(sprintf("CurrentBudget: %s", $dataObject->CurrentBudget));
            self::OutputStatusMessage(sprintf("IncreaseInClicks: %s", $dataObject->IncreaseInClicks));
            self::OutputStatusMessage(sprintf("IncreaseInImpressions: %s", $dataObject->IncreaseInImpressions));
            self::OutputStatusMessage(sprintf("PercentageIncreaseInClicks: %s", $dataObject->PercentageIncreaseInClicks));
            self::OutputStatusMessage(sprintf("PercentageIncreaseInImpressions: %s", $dataObject->PercentageIncreaseInImpressions));
            self::OutputStatusMessage(sprintf("RecommendedBudget: %s", $dataObject->RecommendedBudget));
        }
        self::OutputStatusMessage("* * * End OutputBudgetOpportunity * * *");
    }
    static function OutputArrayOfBudgetOpportunity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BudgetOpportunity))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBudgetOpportunity * * *");
        foreach ($dataObjects->BudgetOpportunity as $dataObject)
        {
            self::OutputBudgetOpportunity($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBudgetOpportunity * * *");
    }
    static function OutputBudgetPoint($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputBudgetPoint * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("BudgetAmount: %s", $dataObject->BudgetAmount));
            self::OutputStatusMessage(sprintf("BudgetPointType: %s", $dataObject->BudgetPointType));
            self::OutputStatusMessage(sprintf("EstimatedWeeklyClicks: %s", $dataObject->EstimatedWeeklyClicks));
            self::OutputStatusMessage(sprintf("EstimatedWeeklyCost: %s", $dataObject->EstimatedWeeklyCost));
            self::OutputStatusMessage(sprintf("EstimatedWeeklyImpressions: %s", $dataObject->EstimatedWeeklyImpressions));
        }
        self::OutputStatusMessage("* * * End OutputBudgetPoint * * *");
    }
    static function OutputArrayOfBudgetPoint($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->BudgetPoint))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfBudgetPoint * * *");
        foreach ($dataObjects->BudgetPoint as $dataObject)
        {
            self::OutputBudgetPoint($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfBudgetPoint * * *");
    }
    static function OutputCampaignEstimate($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignEstimate * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfAdGroupEstimate($dataObject->AdGroupEstimates);
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
        }
        self::OutputStatusMessage("* * * End OutputCampaignEstimate * * *");
    }
    static function OutputArrayOfCampaignEstimate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignEstimate))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignEstimate * * *");
        foreach ($dataObjects->CampaignEstimate as $dataObject)
        {
            self::OutputCampaignEstimate($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignEstimate * * *");
    }
    static function OutputCampaignEstimator($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCampaignEstimator * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfAdGroupEstimator($dataObject->AdGroupEstimators);
            self::OutputStatusMessage(sprintf("CampaignId: %s", $dataObject->CampaignId));
            self::OutputArrayOfCriterion($dataObject->Criteria);
            self::OutputStatusMessage(sprintf("DailyBudget: %s", $dataObject->DailyBudget));
            self::OutputArrayOfNegativeKeyword($dataObject->NegativeKeywords);
        }
        self::OutputStatusMessage("* * * End OutputCampaignEstimator * * *");
    }
    static function OutputArrayOfCampaignEstimator($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CampaignEstimator))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCampaignEstimator * * *");
        foreach ($dataObjects->CampaignEstimator as $dataObject)
        {
            self::OutputCampaignEstimator($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCampaignEstimator * * *");
    }
    static function OutputCategorySearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCategorySearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("CategoryId: %s", $dataObject->CategoryId));
        }
        self::OutputStatusMessage("* * * End OutputCategorySearchParameter * * *");
    }
    static function OutputArrayOfCategorySearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CategorySearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCategorySearchParameter * * *");
        foreach ($dataObjects->CategorySearchParameter as $dataObject)
        {
            self::OutputCategorySearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCategorySearchParameter * * *");
    }
    static function OutputCompetitionSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCompetitionSearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfCompetitionLevel($dataObject->CompetitionLevels);
        }
        self::OutputStatusMessage("* * * End OutputCompetitionSearchParameter * * *");
    }
    static function OutputArrayOfCompetitionSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->CompetitionSearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCompetitionSearchParameter * * *");
        foreach ($dataObjects->CompetitionSearchParameter as $dataObject)
        {
            self::OutputCompetitionSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCompetitionSearchParameter * * *");
    }
    static function OutputCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputCriterion * * *");
        if (!empty($dataObject))
        {
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
        }
        self::OutputStatusMessage("* * * End OutputCriterion * * *");
    }
    static function OutputArrayOfCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Criterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfCriterion * * *");
        foreach ($dataObjects->Criterion as $dataObject)
        {
            self::OutputCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfCriterion * * *");
    }
    static function OutputDateRangeSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDateRangeSearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputDayMonthAndYear($dataObject->EndDate);
            self::OutputDayMonthAndYear($dataObject->StartDate);
        }
        self::OutputStatusMessage("* * * End OutputDateRangeSearchParameter * * *");
    }
    static function OutputArrayOfDateRangeSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DateRangeSearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDateRangeSearchParameter * * *");
        foreach ($dataObjects->DateRangeSearchParameter as $dataObject)
        {
            self::OutputDateRangeSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDateRangeSearchParameter * * *");
    }
    static function OutputDayMonthAndYear($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDayMonthAndYear * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Day: %s", $dataObject->Day));
            self::OutputStatusMessage(sprintf("Month: %s", $dataObject->Month));
            self::OutputStatusMessage(sprintf("Year: %s", $dataObject->Year));
        }
        self::OutputStatusMessage("* * * End OutputDayMonthAndYear * * *");
    }
    static function OutputArrayOfDayMonthAndYear($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DayMonthAndYear))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDayMonthAndYear * * *");
        foreach ($dataObjects->DayMonthAndYear as $dataObject)
        {
            self::OutputDayMonthAndYear($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDayMonthAndYear * * *");
    }
    static function OutputDeviceCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDeviceCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("DeviceName: %s", $dataObject->DeviceName));
        }
        self::OutputStatusMessage("* * * End OutputDeviceCriterion * * *");
    }
    static function OutputArrayOfDeviceCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DeviceCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDeviceCriterion * * *");
        foreach ($dataObjects->DeviceCriterion as $dataObject)
        {
            self::OutputDeviceCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDeviceCriterion * * *");
    }
    static function OutputDeviceSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDeviceSearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputDeviceCriterion($dataObject->Device);
        }
        self::OutputStatusMessage("* * * End OutputDeviceSearchParameter * * *");
    }
    static function OutputArrayOfDeviceSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DeviceSearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDeviceSearchParameter * * *");
        foreach ($dataObjects->DeviceSearchParameter as $dataObject)
        {
            self::OutputDeviceSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDeviceSearchParameter * * *");
    }
    static function OutputDomainCategory($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputDomainCategory * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Bid: %s", $dataObject->Bid));
            self::OutputStatusMessage(sprintf("CategoryName: %s", $dataObject->CategoryName));
            self::OutputStatusMessage(sprintf("Coverage: %s", $dataObject->Coverage));
        }
        self::OutputStatusMessage("* * * End OutputDomainCategory * * *");
    }
    static function OutputArrayOfDomainCategory($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->DomainCategory))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfDomainCategory * * *");
        foreach ($dataObjects->DomainCategory as $dataObject)
        {
            self::OutputDomainCategory($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfDomainCategory * * *");
    }
    static function OutputEstimatedBidAndTraffic($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputEstimatedBidAndTraffic * * *");
        if (!empty($dataObject))
        {
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
        }
        self::OutputStatusMessage("* * * End OutputEstimatedBidAndTraffic * * *");
    }
    static function OutputArrayOfEstimatedBidAndTraffic($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EstimatedBidAndTraffic))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEstimatedBidAndTraffic * * *");
        foreach ($dataObjects->EstimatedBidAndTraffic as $dataObject)
        {
            self::OutputEstimatedBidAndTraffic($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEstimatedBidAndTraffic * * *");
    }
    static function OutputEstimatedPositionAndTraffic($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputEstimatedPositionAndTraffic * * *");
        if (!empty($dataObject))
        {
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
        }
        self::OutputStatusMessage("* * * End OutputEstimatedPositionAndTraffic * * *");
    }
    static function OutputArrayOfEstimatedPositionAndTraffic($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->EstimatedPositionAndTraffic))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfEstimatedPositionAndTraffic * * *");
        foreach ($dataObjects->EstimatedPositionAndTraffic as $dataObject)
        {
            self::OutputEstimatedPositionAndTraffic($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfEstimatedPositionAndTraffic * * *");
    }
    static function OutputExcludeAccountKeywordsSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputExcludeAccountKeywordsSearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("ExcludeAccountKeywords: %s", $dataObject->ExcludeAccountKeywords));
        }
        self::OutputStatusMessage("* * * End OutputExcludeAccountKeywordsSearchParameter * * *");
    }
    static function OutputArrayOfExcludeAccountKeywordsSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ExcludeAccountKeywordsSearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfExcludeAccountKeywordsSearchParameter * * *");
        foreach ($dataObjects->ExcludeAccountKeywordsSearchParameter as $dataObject)
        {
            self::OutputExcludeAccountKeywordsSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfExcludeAccountKeywordsSearchParameter * * *");
    }
    static function OutputHistoricalSearchCountPeriodic($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputHistoricalSearchCountPeriodic * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("SearchCount: %s", $dataObject->SearchCount));
            self::OutputDayMonthAndYear($dataObject->DayMonthAndYear);
        }
        self::OutputStatusMessage("* * * End OutputHistoricalSearchCountPeriodic * * *");
    }
    static function OutputArrayOfHistoricalSearchCountPeriodic($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->HistoricalSearchCountPeriodic))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfHistoricalSearchCountPeriodic * * *");
        foreach ($dataObjects->HistoricalSearchCountPeriodic as $dataObject)
        {
            self::OutputHistoricalSearchCountPeriodic($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfHistoricalSearchCountPeriodic * * *");
    }
    static function OutputIdeaTextSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputIdeaTextSearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfKeyword($dataObject->Excluded);
            self::OutputArrayOfKeyword($dataObject->Included);
        }
        self::OutputStatusMessage("* * * End OutputIdeaTextSearchParameter * * *");
    }
    static function OutputArrayOfIdeaTextSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->IdeaTextSearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfIdeaTextSearchParameter * * *");
        foreach ($dataObjects->IdeaTextSearchParameter as $dataObject)
        {
            self::OutputIdeaTextSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfIdeaTextSearchParameter * * *");
    }
    static function OutputImpressionShareSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputImpressionShareSearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Maximum: %s", $dataObject->Maximum));
            self::OutputStatusMessage(sprintf("Minimum: %s", $dataObject->Minimum));
        }
        self::OutputStatusMessage("* * * End OutputImpressionShareSearchParameter * * *");
    }
    static function OutputArrayOfImpressionShareSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->ImpressionShareSearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfImpressionShareSearchParameter * * *");
        foreach ($dataObjects->ImpressionShareSearchParameter as $dataObject)
        {
            self::OutputImpressionShareSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfImpressionShareSearchParameter * * *");
    }
    static function OutputKeyword($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeyword * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
        }
        self::OutputStatusMessage("* * * End OutputKeyword * * *");
    }
    static function OutputArrayOfKeyword($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Keyword))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeyword * * *");
        foreach ($dataObjects->Keyword as $dataObject)
        {
            self::OutputKeyword($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeyword * * *");
    }
    static function OutputKeywordAndConfidence($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordAndConfidence * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("SuggestedKeyword: %s", $dataObject->SuggestedKeyword));
            self::OutputStatusMessage(sprintf("ConfidenceScore: %s", $dataObject->ConfidenceScore));
        }
        self::OutputStatusMessage("* * * End OutputKeywordAndConfidence * * *");
    }
    static function OutputArrayOfKeywordAndConfidence($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordAndConfidence))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordAndConfidence * * *");
        foreach ($dataObjects->KeywordAndConfidence as $dataObject)
        {
            self::OutputKeywordAndConfidence($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordAndConfidence * * *");
    }
    static function OutputKeywordAndMatchType($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordAndMatchType * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("KeywordText: %s", $dataObject->KeywordText));
            self::OutputArrayOfMatchType($dataObject->MatchTypes);
        }
        self::OutputStatusMessage("* * * End OutputKeywordAndMatchType * * *");
    }
    static function OutputArrayOfKeywordAndMatchType($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordAndMatchType))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordAndMatchType * * *");
        foreach ($dataObjects->KeywordAndMatchType as $dataObject)
        {
            self::OutputKeywordAndMatchType($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordAndMatchType * * *");
    }
    static function OutputKeywordBidLandscape($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordBidLandscape * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("KeywordId: %s", $dataObject->KeywordId));
            self::OutputDayMonthAndYear($dataObject->StartDate);
            self::OutputDayMonthAndYear($dataObject->EndDate);
            self::OutputArrayOfBidLandscapePoint($dataObject->BidLandscapePoints);
        }
        self::OutputStatusMessage("* * * End OutputKeywordBidLandscape * * *");
    }
    static function OutputArrayOfKeywordBidLandscape($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordBidLandscape))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordBidLandscape * * *");
        foreach ($dataObjects->KeywordBidLandscape as $dataObject)
        {
            self::OutputKeywordBidLandscape($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordBidLandscape * * *");
    }
    static function OutputKeywordCategory($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordCategory * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Category: %s", $dataObject->Category));
            self::OutputStatusMessage(sprintf("ConfidenceScore: %s", $dataObject->ConfidenceScore));
        }
        self::OutputStatusMessage("* * * End OutputKeywordCategory * * *");
    }
    static function OutputArrayOfKeywordCategory($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordCategory))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordCategory * * *");
        foreach ($dataObjects->KeywordCategory as $dataObject)
        {
            self::OutputKeywordCategory($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordCategory * * *");
    }
    static function OutputKeywordCategoryResult($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordCategoryResult * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputArrayOfKeywordCategory($dataObject->KeywordCategories);
        }
        self::OutputStatusMessage("* * * End OutputKeywordCategoryResult * * *");
    }
    static function OutputArrayOfKeywordCategoryResult($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordCategoryResult))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordCategoryResult * * *");
        foreach ($dataObjects->KeywordCategoryResult as $dataObject)
        {
            self::OutputKeywordCategoryResult($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordCategoryResult * * *");
    }
    static function OutputKeywordDemographic($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordDemographic * * *");
        if (!empty($dataObject))
        {
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
        }
        self::OutputStatusMessage("* * * End OutputKeywordDemographic * * *");
    }
    static function OutputArrayOfKeywordDemographic($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordDemographic))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordDemographic * * *");
        foreach ($dataObjects->KeywordDemographic as $dataObject)
        {
            self::OutputKeywordDemographic($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordDemographic * * *");
    }
    static function OutputKeywordDemographicResult($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordDemographicResult * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputArrayOfKeywordDemographic($dataObject->KeywordDemographics);
        }
        self::OutputStatusMessage("* * * End OutputKeywordDemographicResult * * *");
    }
    static function OutputArrayOfKeywordDemographicResult($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordDemographicResult))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordDemographicResult * * *");
        foreach ($dataObjects->KeywordDemographicResult as $dataObject)
        {
            self::OutputKeywordDemographicResult($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordDemographicResult * * *");
    }
    static function OutputKeywordEstimate($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordEstimate * * *");
        if (!empty($dataObject))
        {
            self::OutputKeyword($dataObject->Keyword);
            self::OutputTrafficEstimate($dataObject->Maximum);
            self::OutputTrafficEstimate($dataObject->Minimum);
        }
        self::OutputStatusMessage("* * * End OutputKeywordEstimate * * *");
    }
    static function OutputArrayOfKeywordEstimate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordEstimate))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordEstimate * * *");
        foreach ($dataObjects->KeywordEstimate as $dataObject)
        {
            self::OutputKeywordEstimate($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordEstimate * * *");
    }
    static function OutputKeywordEstimatedBid($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordEstimatedBid * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputArrayOfEstimatedBidAndTraffic($dataObject->EstimatedBids);
        }
        self::OutputStatusMessage("* * * End OutputKeywordEstimatedBid * * *");
    }
    static function OutputArrayOfKeywordEstimatedBid($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordEstimatedBid))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordEstimatedBid * * *");
        foreach ($dataObjects->KeywordEstimatedBid as $dataObject)
        {
            self::OutputKeywordEstimatedBid($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordEstimatedBid * * *");
    }
    static function OutputKeywordEstimatedPosition($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordEstimatedPosition * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputArrayOfEstimatedPositionAndTraffic($dataObject->EstimatedPositions);
        }
        self::OutputStatusMessage("* * * End OutputKeywordEstimatedPosition * * *");
    }
    static function OutputArrayOfKeywordEstimatedPosition($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordEstimatedPosition))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordEstimatedPosition * * *");
        foreach ($dataObjects->KeywordEstimatedPosition as $dataObject)
        {
            self::OutputKeywordEstimatedPosition($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordEstimatedPosition * * *");
    }
    static function OutputKeywordEstimator($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordEstimator * * *");
        if (!empty($dataObject))
        {
            self::OutputKeyword($dataObject->Keyword);
            self::OutputStatusMessage(sprintf("MaxCpc: %s", $dataObject->MaxCpc));
        }
        self::OutputStatusMessage("* * * End OutputKeywordEstimator * * *");
    }
    static function OutputArrayOfKeywordEstimator($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordEstimator))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordEstimator * * *");
        foreach ($dataObjects->KeywordEstimator as $dataObject)
        {
            self::OutputKeywordEstimator($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordEstimator * * *");
    }
    static function OutputKeywordHistoricalPerformance($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordHistoricalPerformance * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputArrayOfKeywordKPI($dataObject->KeywordKPIs);
        }
        self::OutputStatusMessage("* * * End OutputKeywordHistoricalPerformance * * *");
    }
    static function OutputArrayOfKeywordHistoricalPerformance($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordHistoricalPerformance))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordHistoricalPerformance * * *");
        foreach ($dataObjects->KeywordHistoricalPerformance as $dataObject)
        {
            self::OutputKeywordHistoricalPerformance($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordHistoricalPerformance * * *");
    }
    static function OutputKeywordIdea($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordIdea * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AdGroupId: %s", $dataObject->AdGroupId));
            self::OutputStatusMessage(sprintf("AdGroupName: %s", $dataObject->AdGroupName));
            self::OutputStatusMessage(sprintf("AdImpressionShare: %s", $dataObject->AdImpressionShare));
            self::OutputStatusMessage(sprintf("Competition: %s", $dataObject->Competition));
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputArrayOfLong($dataObject->MonthlySearchCounts);
            self::OutputStatusMessage(sprintf("Relevance: %s", $dataObject->Relevance));
            self::OutputStatusMessage(sprintf("Source: %s", $dataObject->Source));
            self::OutputStatusMessage(sprintf("SuggestedBid: %s", $dataObject->SuggestedBid));
        }
        self::OutputStatusMessage("* * * End OutputKeywordIdea * * *");
    }
    static function OutputArrayOfKeywordIdea($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordIdea))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordIdea * * *");
        foreach ($dataObjects->KeywordIdea as $dataObject)
        {
            self::OutputKeywordIdea($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordIdea * * *");
    }
    static function OutputKeywordIdeaCategory($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordIdeaCategory * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("CategoryId: %s", $dataObject->CategoryId));
            self::OutputStatusMessage(sprintf("CategoryName: %s", $dataObject->CategoryName));
        }
        self::OutputStatusMessage("* * * End OutputKeywordIdeaCategory * * *");
    }
    static function OutputArrayOfKeywordIdeaCategory($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordIdeaCategory))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordIdeaCategory * * *");
        foreach ($dataObjects->KeywordIdeaCategory as $dataObject)
        {
            self::OutputKeywordIdeaCategory($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordIdeaCategory * * *");
    }
    static function OutputKeywordIdEstimatedBid($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordIdEstimatedBid * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("KeywordId: %s", $dataObject->KeywordId));
            self::OutputKeywordEstimatedBid($dataObject->KeywordEstimatedBid);
        }
        self::OutputStatusMessage("* * * End OutputKeywordIdEstimatedBid * * *");
    }
    static function OutputArrayOfKeywordIdEstimatedBid($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordIdEstimatedBid))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordIdEstimatedBid * * *");
        foreach ($dataObjects->KeywordIdEstimatedBid as $dataObject)
        {
            self::OutputKeywordIdEstimatedBid($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordIdEstimatedBid * * *");
    }
    static function OutputKeywordIdEstimatedPosition($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordIdEstimatedPosition * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("KeywordId: %s", $dataObject->KeywordId));
            self::OutputKeywordEstimatedPosition($dataObject->KeywordEstimatedPosition);
        }
        self::OutputStatusMessage("* * * End OutputKeywordIdEstimatedPosition * * *");
    }
    static function OutputArrayOfKeywordIdEstimatedPosition($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordIdEstimatedPosition))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordIdEstimatedPosition * * *");
        foreach ($dataObjects->KeywordIdEstimatedPosition as $dataObject)
        {
            self::OutputKeywordIdEstimatedPosition($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordIdEstimatedPosition * * *");
    }
    static function OutputKeywordKPI($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordKPI * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Device: %s", $dataObject->Device));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("AdPosition: %s", $dataObject->AdPosition));
            self::OutputStatusMessage(sprintf("Clicks: %s", $dataObject->Clicks));
            self::OutputStatusMessage(sprintf("Impressions: %s", $dataObject->Impressions));
            self::OutputStatusMessage(sprintf("AverageCPC: %s", $dataObject->AverageCPC));
            self::OutputStatusMessage(sprintf("CTR: %s", $dataObject->CTR));
            self::OutputStatusMessage(sprintf("TotalCost: %s", $dataObject->TotalCost));
            self::OutputStatusMessage(sprintf("AverageBid: %s", $dataObject->AverageBid));
        }
        self::OutputStatusMessage("* * * End OutputKeywordKPI * * *");
    }
    static function OutputArrayOfKeywordKPI($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordKPI))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordKPI * * *");
        foreach ($dataObjects->KeywordKPI as $dataObject)
        {
            self::OutputKeywordKPI($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordKPI * * *");
    }
    static function OutputKeywordLocation($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordLocation * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Device: %s", $dataObject->Device));
            self::OutputStatusMessage(sprintf("Location: %s", $dataObject->Location));
            self::OutputStatusMessage(sprintf("Percentage: %s", $dataObject->Percentage));
        }
        self::OutputStatusMessage("* * * End OutputKeywordLocation * * *");
    }
    static function OutputArrayOfKeywordLocation($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordLocation))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordLocation * * *");
        foreach ($dataObjects->KeywordLocation as $dataObject)
        {
            self::OutputKeywordLocation($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordLocation * * *");
    }
    static function OutputKeywordLocationResult($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordLocationResult * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputArrayOfKeywordLocation($dataObject->KeywordLocations);
        }
        self::OutputStatusMessage("* * * End OutputKeywordLocationResult * * *");
    }
    static function OutputArrayOfKeywordLocationResult($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordLocationResult))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordLocationResult * * *");
        foreach ($dataObjects->KeywordLocationResult as $dataObject)
        {
            self::OutputKeywordLocationResult($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordLocationResult * * *");
    }
    static function OutputKeywordOpportunity($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordOpportunity * * *");
        if (!empty($dataObject))
        {
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
        }
        self::OutputStatusMessage("* * * End OutputKeywordOpportunity * * *");
    }
    static function OutputArrayOfKeywordOpportunity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordOpportunity))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordOpportunity * * *");
        foreach ($dataObjects->KeywordOpportunity as $dataObject)
        {
            self::OutputKeywordOpportunity($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordOpportunity * * *");
    }
    static function OutputKeywordSearchCount($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordSearchCount * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputArrayOfSearchCountsByAttributes($dataObject->SearchCountsByAttributes);
        }
        self::OutputStatusMessage("* * * End OutputKeywordSearchCount * * *");
    }
    static function OutputArrayOfKeywordSearchCount($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordSearchCount))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordSearchCount * * *");
        foreach ($dataObjects->KeywordSearchCount as $dataObject)
        {
            self::OutputKeywordSearchCount($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordSearchCount * * *");
    }
    static function OutputKeywordSuggestion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputKeywordSuggestion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Keyword: %s", $dataObject->Keyword));
            self::OutputArrayOfKeywordAndConfidence($dataObject->SuggestionsAndConfidence);
        }
        self::OutputStatusMessage("* * * End OutputKeywordSuggestion * * *");
    }
    static function OutputArrayOfKeywordSuggestion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->KeywordSuggestion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfKeywordSuggestion * * *");
        foreach ($dataObjects->KeywordSuggestion as $dataObject)
        {
            self::OutputKeywordSuggestion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfKeywordSuggestion * * *");
    }
    static function OutputLanguageCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputLanguageCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Language: %s", $dataObject->Language));
        }
        self::OutputStatusMessage("* * * End OutputLanguageCriterion * * *");
    }
    static function OutputArrayOfLanguageCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LanguageCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLanguageCriterion * * *");
        foreach ($dataObjects->LanguageCriterion as $dataObject)
        {
            self::OutputLanguageCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLanguageCriterion * * *");
    }
    static function OutputLanguageSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputLanguageSearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfLanguageCriterion($dataObject->Languages);
        }
        self::OutputStatusMessage("* * * End OutputLanguageSearchParameter * * *");
    }
    static function OutputArrayOfLanguageSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LanguageSearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLanguageSearchParameter * * *");
        foreach ($dataObjects->LanguageSearchParameter as $dataObject)
        {
            self::OutputLanguageSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLanguageSearchParameter * * *");
    }
    static function OutputLocationCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputLocationCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("LocationId: %s", $dataObject->LocationId));
        }
        self::OutputStatusMessage("* * * End OutputLocationCriterion * * *");
    }
    static function OutputArrayOfLocationCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LocationCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLocationCriterion * * *");
        foreach ($dataObjects->LocationCriterion as $dataObject)
        {
            self::OutputLocationCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLocationCriterion * * *");
    }
    static function OutputLocationSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputLocationSearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfLocationCriterion($dataObject->Locations);
        }
        self::OutputStatusMessage("* * * End OutputLocationSearchParameter * * *");
    }
    static function OutputArrayOfLocationSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->LocationSearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfLocationSearchParameter * * *");
        foreach ($dataObjects->LocationSearchParameter as $dataObject)
        {
            self::OutputLocationSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfLocationSearchParameter * * *");
    }
    static function OutputNegativeKeyword($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputNegativeKeyword * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Id: %s", $dataObject->Id));
            self::OutputStatusMessage(sprintf("MatchType: %s", $dataObject->MatchType));
            self::OutputStatusMessage(sprintf("Text: %s", $dataObject->Text));
        }
        self::OutputStatusMessage("* * * End OutputNegativeKeyword * * *");
    }
    static function OutputArrayOfNegativeKeyword($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NegativeKeyword))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNegativeKeyword * * *");
        foreach ($dataObjects->NegativeKeyword as $dataObject)
        {
            self::OutputNegativeKeyword($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNegativeKeyword * * *");
    }
    static function OutputNetworkCriterion($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputNetworkCriterion * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Network: %s", $dataObject->Network));
        }
        self::OutputStatusMessage("* * * End OutputNetworkCriterion * * *");
    }
    static function OutputArrayOfNetworkCriterion($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NetworkCriterion))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNetworkCriterion * * *");
        foreach ($dataObjects->NetworkCriterion as $dataObject)
        {
            self::OutputNetworkCriterion($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNetworkCriterion * * *");
    }
    static function OutputNetworkSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputNetworkSearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputNetworkCriterion($dataObject->Network);
        }
        self::OutputStatusMessage("* * * End OutputNetworkSearchParameter * * *");
    }
    static function OutputArrayOfNetworkSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->NetworkSearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfNetworkSearchParameter * * *");
        foreach ($dataObjects->NetworkSearchParameter as $dataObject)
        {
            self::OutputNetworkSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfNetworkSearchParameter * * *");
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
    static function OutputOpportunity($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputOpportunity * * *");
        if (!empty($dataObject))
        {
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
        }
        self::OutputStatusMessage("* * * End OutputOpportunity * * *");
    }
    static function OutputArrayOfOpportunity($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->Opportunity))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfOpportunity * * *");
        foreach ($dataObjects->Opportunity as $dataObject)
        {
            self::OutputOpportunity($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfOpportunity * * *");
    }
    static function OutputQuerySearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputQuerySearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputArrayOfString($dataObject->Queries);
        }
        self::OutputStatusMessage("* * * End OutputQuerySearchParameter * * *");
    }
    static function OutputArrayOfQuerySearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->QuerySearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfQuerySearchParameter * * *");
        foreach ($dataObjects->QuerySearchParameter as $dataObject)
        {
            self::OutputQuerySearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfQuerySearchParameter * * *");
    }
    static function OutputSearchCountsByAttributes($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSearchCountsByAttributes * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Device: %s", $dataObject->Device));
            self::OutputArrayOfHistoricalSearchCountPeriodic($dataObject->HistoricalSearchCounts);
        }
        self::OutputStatusMessage("* * * End OutputSearchCountsByAttributes * * *");
    }
    static function OutputArrayOfSearchCountsByAttributes($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchCountsByAttributes))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSearchCountsByAttributes * * *");
        foreach ($dataObjects->SearchCountsByAttributes as $dataObject)
        {
            self::OutputSearchCountsByAttributes($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSearchCountsByAttributes * * *");
    }
    static function OutputSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSearchParameter * * *");
        if (!empty($dataObject))
        {
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
        }
        self::OutputStatusMessage("* * * End OutputSearchParameter * * *");
    }
    static function OutputArrayOfSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSearchParameter * * *");
        foreach ($dataObjects->SearchParameter as $dataObject)
        {
            self::OutputSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSearchParameter * * *");
    }
    static function OutputSearchVolumeSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSearchVolumeSearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Maximum: %s", $dataObject->Maximum));
            self::OutputStatusMessage(sprintf("Minimum: %s", $dataObject->Minimum));
        }
        self::OutputStatusMessage("* * * End OutputSearchVolumeSearchParameter * * *");
    }
    static function OutputArrayOfSearchVolumeSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SearchVolumeSearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSearchVolumeSearchParameter * * *");
        foreach ($dataObjects->SearchVolumeSearchParameter as $dataObject)
        {
            self::OutputSearchVolumeSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSearchVolumeSearchParameter * * *");
    }
    static function OutputSuggestedBidSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputSuggestedBidSearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Maximum: %s", $dataObject->Maximum));
            self::OutputStatusMessage(sprintf("Minimum: %s", $dataObject->Minimum));
        }
        self::OutputStatusMessage("* * * End OutputSuggestedBidSearchParameter * * *");
    }
    static function OutputArrayOfSuggestedBidSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->SuggestedBidSearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfSuggestedBidSearchParameter * * *");
        foreach ($dataObjects->SuggestedBidSearchParameter as $dataObject)
        {
            self::OutputSuggestedBidSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfSuggestedBidSearchParameter * * *");
    }
    static function OutputTrafficEstimate($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputTrafficEstimate * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("AverageCpc: %s", $dataObject->AverageCpc));
            self::OutputStatusMessage(sprintf("AveragePosition: %s", $dataObject->AveragePosition));
            self::OutputStatusMessage(sprintf("Clicks: %s", $dataObject->Clicks));
            self::OutputStatusMessage(sprintf("Ctr: %s", $dataObject->Ctr));
            self::OutputStatusMessage(sprintf("Impressions: %s", $dataObject->Impressions));
            self::OutputStatusMessage(sprintf("TotalCost: %s", $dataObject->TotalCost));
        }
        self::OutputStatusMessage("* * * End OutputTrafficEstimate * * *");
    }
    static function OutputArrayOfTrafficEstimate($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->TrafficEstimate))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfTrafficEstimate * * *");
        foreach ($dataObjects->TrafficEstimate as $dataObject)
        {
            self::OutputTrafficEstimate($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfTrafficEstimate * * *");
    }
    static function OutputUrlSearchParameter($dataObject)
    {
        self::OutputStatusMessage("* * * Begin OutputUrlSearchParameter * * *");
        if (!empty($dataObject))
        {
            self::OutputStatusMessage(sprintf("Url: %s", $dataObject->Url));
        }
        self::OutputStatusMessage("* * * End OutputUrlSearchParameter * * *");
    }
    static function OutputArrayOfUrlSearchParameter($dataObjects)
    {
        if(count((array)$dataObjects) == 0 || !isset($dataObjects->UrlSearchParameter))
        {
            return;
        }
        self::OutputStatusMessage("* * * Begin OutputArrayOfUrlSearchParameter * * *");
        foreach ($dataObjects->UrlSearchParameter as $dataObject)
        {
            self::OutputUrlSearchParameter($dataObject);
        }
        self::OutputStatusMessage("* * * End OutputArrayOfUrlSearchParameter * * *");
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
