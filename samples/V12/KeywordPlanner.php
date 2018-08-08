<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/AdInsightExampleHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;
use DateTime;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V12\AuthHelper;
use Microsoft\BingAds\Samples\V12\AdInsightExampleHelper;

// Specify the Microsoft\BingAds\V12\AdInsight classes that will be used.
use Microsoft\BingAds\V12\AdInsight\KeywordIdeaAttribute;
use Microsoft\BingAds\V12\AdInsight\SearchParameter;
use Microsoft\BingAds\V12\AdInsight\DateRangeSearchParameter;
use Microsoft\BingAds\V12\AdInsight\DayMonthAndYear;
use Microsoft\BingAds\V12\AdInsight\CategorySearchParameter;
use Microsoft\BingAds\V12\AdInsight\QuerySearchParameter;
use Microsoft\BingAds\V12\AdInsight\UrlSearchParameter;
use Microsoft\BingAds\V12\AdInsight\LanguageSearchParameter;
use Microsoft\BingAds\V12\AdInsight\Criterion;
use Microsoft\BingAds\V12\AdInsight\LanguageCriterion;
use Microsoft\BingAds\V12\AdInsight\LocationSearchParameter;
use Microsoft\BingAds\V12\AdInsight\LocationCriterion;
use Microsoft\BingAds\V12\AdInsight\NetworkSearchParameter;
use Microsoft\BingAds\V12\AdInsight\NetworkCriterion;
use Microsoft\BingAds\V12\AdInsight\NetworkType;
use Microsoft\BingAds\V12\AdInsight\CompetitionSearchParameter;
use Microsoft\BingAds\V12\AdInsight\CompetitionLevel;
use Microsoft\BingAds\V12\AdInsight\ExcludeAccountKeywordsSearchParameter;
use Microsoft\BingAds\V12\AdInsight\IdeaTextSearchParameter;
use Microsoft\BingAds\V12\AdInsight\Keyword;
use Microsoft\BingAds\V12\AdInsight\MatchType;
use Microsoft\BingAds\V12\AdInsight\ImpressionShareSearchParameter;
use Microsoft\BingAds\V12\AdInsight\SearchVolumeSearchParameter;
use Microsoft\BingAds\V12\AdInsight\SuggestedBidSearchParameter;
use Microsoft\BingAds\V12\AdInsight\DeviceSearchParameter;
use Microsoft\BingAds\V12\AdInsight\DeviceCriterion;
use Microsoft\BingAds\V12\AdInsight\AdGroupEstimator;
use Microsoft\BingAds\V12\AdInsight\KeywordEstimator;
use Microsoft\BingAds\V12\AdInsight\CampaignEstimator;
use Microsoft\BingAds\V12\AdInsight\AdGroupEstimate;
use Microsoft\BingAds\V12\AdInsight\KeywordEstimate;
use Microsoft\BingAds\V12\AdInsight\CampaignEstimate;
use Microsoft\BingAds\V12\AdInsight\NegativeKeyword;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CampaignManagementProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // Authenticate for Bing Ads services with a Microsoft Account.
    
    AuthHelper::Authenticate();

    $GLOBALS['AdInsightProxy'] = new ServiceClient(
        ServiceClientType::AdInsightVersion12, 
        $GLOBALS['AuthorizationData'], 
        AuthHelper::GetApiEnvironment());

    $searchParametersNamespace = "http://schemas.datacontract.org/2004/07/Microsoft.BingAds.Advertiser.AdInsight.Api.DataContract.V12.Entity.SearchParameters";
    $criterionsNamespace = "http://schemas.datacontract.org/2004/07/Microsoft.BingAds.Advertiser.AdInsight.Api.DataContract.V12.Entity.Criterions";
        
    $getKeywordIdeaCategoriesResponse = AdInsightExampleHelper::GetKeywordIdeaCategories();
    if(isset($getKeywordIdeaCategoriesResponse->KeywordIdeaCategories))
    {
        $categoryId = $getKeywordIdeaCategoriesResponse->KeywordIdeaCategories->KeywordIdeaCategory[0]->CategoryId;
    }
    
    // You must specify the attributes that you want in each returned KeywordIdea.

    $ideaAttributes = array();
    $ideaAttributes[] = KeywordIdeaAttribute::AdGroupId;
    $ideaAttributes[] = KeywordIdeaAttribute::AdGroupName;
    $ideaAttributes[] = KeywordIdeaAttribute::AdImpressionShare;
    $ideaAttributes[] = KeywordIdeaAttribute::Competition;
    $ideaAttributes[] = KeywordIdeaAttribute::Keyword;
    $ideaAttributes[] = KeywordIdeaAttribute::MonthlySearchCounts;
    $ideaAttributes[] = KeywordIdeaAttribute::Relevance;
    $ideaAttributes[] = KeywordIdeaAttribute::Source;
    $ideaAttributes[] = KeywordIdeaAttribute::SuggestedBid;

    date_default_timezone_set('UTC');
    $now = new DateTime(gmdate('Y-m-d H:i:s', time()));

    // Only one of each SearchParameter type can be specified per call. 

    $searchParameters = array();
    // Determines the start and end month for MonthlySearchCounts data returned with each KeywordIdea.
    // The date range search parameter is optional. If you do not include the DateRangeSearchParameter 
    // in the GetKeywordIdeas request, then you will not be able to confirm whether the first list item 
    // within MonthlySearchCounts is data for the previous month, or the month prior. If the date range is 
    // specified and the most recent month's data is not yet available, then GetKeywordIdeas will return an error.

    $dateRangeSearchParameter = new DateRangeSearchParameter();
    $dateRangeSearchParameterEndDate = new DayMonthAndYear();
    $dateRangeSearchParameterEndDate->Day = date_format($now,"d");
    $dateRangeSearchParameterEndDate->Month = date_format($now,"m") - 2;
    $dateRangeSearchParameterEndDate->Year =date_format($now,"Y");
    $dateRangeSearchParameter->EndDate = $dateRangeSearchParameterEndDate;
    $dateRangeSearchParameterStartDate = new DayMonthAndYear();
    $dateRangeSearchParameterStartDate->Day = date_format($now,"d");
    $dateRangeSearchParameterStartDate->Month = date_format($now,"m") - 1;
    $dateRangeSearchParameterStartDate->Year =date_format($now,"Y") - 1;
    $dateRangeSearchParameter->StartDate = $dateRangeSearchParameterStartDate;
    $searchParameters[] = new SoapVar(
        $dateRangeSearchParameter, 
        SOAP_ENC_OBJECT, 
        'DateRangeSearchParameter', 
        $searchParametersNamespace);
    
    // The CategorySearchParameter corresponds to filling in 'Your product category' under
    // 'Search for new keywords using a phrase, website, or category' in the 
    // Bing Ads web application's Keyword Planner tool.
    // One or more CategorySearchParameter, QuerySearchParameter, or UrlSearchParameter is required.
    
    $categorySearchParameter = new CategorySearchParameter();
    $categorySearchParameter->CategoryId = $categoryId;
    $searchParameters[] = new SoapVar(
        $categorySearchParameter, 
        SOAP_ENC_OBJECT, 
        'CategorySearchParameter', 
        $searchParametersNamespace);

    // The QuerySearchParameter corresponds to filling in 'Product or service' under
    // 'Search for new keywords using a phrase, website, or category' in the 
    // Bing Ads web application's Keyword Planner tool.
    // One or more CategorySearchParameter, QuerySearchParameter, or UrlSearchParameter is required.
    // When calling GetKeywordIdeas, if ExpandIdeas = false the QuerySearchParameter is required. 

    $querySearchParameter = new QuerySearchParameter();
    $querySearchParameter->Queries = array("tennis", "tennis shoes", "running", "running shoes", "cross training", "running");
    $searchParameters[] = new SoapVar(
        $querySearchParameter, 
        SOAP_ENC_OBJECT, 
        'QuerySearchParameter', 
        $searchParametersNamespace);

    // The UrlSearchParameter corresponds to filling in 'Your landing page' under
    // 'Search for new keywords using a phrase, website, or category' in the 
    // Bing Ads web application's Keyword Planner tool.
    // One or more CategorySearchParameter, QuerySearchParameter, or UrlSearchParameter is required.

    $urlSearchParameter = new UrlSearchParameter();
    $urlSearchParameter->Url = "contoso.com";
    $searchParameters[] = new SoapVar(
        $urlSearchParameter, 
        SOAP_ENC_OBJECT, 
        'UrlSearchParameter', 
        $searchParametersNamespace);
    
    // The LanguageSearchParameter, LocationSearchParameter, and NetworkSearchParameter
    // correspond to the 'Keyword Planner' -> 'Search for new keywords using a phrase, website, or category' ->
    // 'Targeting' workflow in the Bing Ads web application.
    // Each of these search parameters are required.

    $languageSearchParameter = new LanguageSearchParameter();
    $languageCriterion = new LanguageCriterion();
    $languageCriterion->Language = "English";
    $languageSearchParameter->Languages[] = new SoapVar(
        $languageCriterion, 
        SOAP_ENC_OBJECT, 
        'LanguageCriterion', 
        $criterionsNamespace);
    $searchParameters[] = new SoapVar(
        $languageSearchParameter, 
        SOAP_ENC_OBJECT, 
        'LanguageSearchParameter', 
        $searchParametersNamespace);

    $locationSearchParameter = new LocationSearchParameter();
    $locationSearchParameter->Locations = array();
    $locationCriterion = new LocationCriterion();
    // United States
    $locationCriterion->LocationId = 190;
    $locationSearchParameter->Locations[] = new SoapVar(
        $locationCriterion, 
        SOAP_ENC_OBJECT, 
        'LocationCriterion', 
        $criterionsNamespace);
    $searchParameters[] = new SoapVar(
        $locationSearchParameter, 
        SOAP_ENC_OBJECT, 
        'LocationSearchParameter', 
        $searchParametersNamespace);

    $networkSearchParameter = new NetworkSearchParameter();
    $networkCriterion = new NetworkCriterion();
    $networkCriterion->Network = NetworkType::OwnedAndOperatedAndSyndicatedSearch;
    $networkSearchParameter->Network = new SoapVar(
        $networkCriterion, 
        SOAP_ENC_OBJECT, 
        'NetworkCriterion', 
        $criterionsNamespace);
    $searchParameters[] = new SoapVar(
        $networkSearchParameter, 
        SOAP_ENC_OBJECT, 
        'NetworkSearchParameter', 
        $searchParametersNamespace);

    // The CompetitionSearchParameter, ExcludeAccountKeywordsSearchParameter, IdeaTextSearchParameter, 
    // ImpressionShareSearchParameter, SearchVolumeSearchParameter, and SuggestedBidSearchParameter  
    // correspond to the 'Keyword Planner' -> 'Search for new keywords using a phrase, website, or category' -> 
    // 'Search options' workflow in the Bing Ads web application.
    // Use these options to refine what keywords we suggest. You can limit the keywords by historical data, 
    // hide keywords already in your account, and include or exclude specific keywords.
    // Each of these search parameters are optional.

    $competitionSearchParameter = new CompetitionSearchParameter();
    $competitionLevels = array(CompetitionLevel::High, CompetitionLevel::Medium, CompetitionLevel::Low);
    $competitionSearchParameter->CompetitionLevels = $competitionLevels;
    $searchParameters[] = new SoapVar(
        $competitionSearchParameter, 
        SOAP_ENC_OBJECT, 
        'CompetitionSearchParameter', 
        $searchParametersNamespace);

    $excludeAccountKeywordsSearchParameter = new ExcludeAccountKeywordsSearchParameter();
    $excludeAccountKeywordsSearchParameter->ExcludeAccountKeywords = false;
    $searchParameters[] = new SoapVar(
        $excludeAccountKeywordsSearchParameter, 
        SOAP_ENC_OBJECT, 
        'ExcludeAccountKeywordsSearchParameter', 
        $searchParametersNamespace);

    $ideaTextSearchParameter = new IdeaTextSearchParameter();
    $excludedKeywords = array();
    $excludedKeyword1 = new Keyword();
    $excludedKeyword1->Text = "tennis court";
    // The match type is required. Only Broad is supported.
    $excludedKeyword1->MatchType = MatchType::Broad;
    $excludedKeywords[] = $excludedKeyword1;
    $excludedKeyword2 = new Keyword();
    $excludedKeyword2->Text = "tennis pro";
    $excludedKeyword2->MatchType = MatchType::Broad;
    $excludedKeywords[] = $excludedKeyword2;
    $ideaTextSearchParameter->Excluded = $excludedKeywords;
    $includedKeyword1 = new Keyword();
    $includedKeyword1->Text = "athletic clothing";
    $includedKeyword1->MatchType = MatchType::Broad;
    $includedKeywords[] = $includedKeyword1;
    $includedKeyword2 = new Keyword();
    $includedKeyword2->Text = "athletic shoes";
    $includedKeyword2->MatchType = MatchType::Broad;
    $includedKeywords[] = $includedKeyword2;
    $ideaTextSearchParameter->Included = $includedKeywords;
    $searchParameters[] = new SoapVar(
        $ideaTextSearchParameter, 
        SOAP_ENC_OBJECT, 
        'IdeaTextSearchParameter', 
        $searchParametersNamespace);

    $impressionShareSearchParameter = new ImpressionShareSearchParameter();
    // Equivalent of '0 <= value <= 50'
    $impressionShareSearchParameter->Maximum = 50;
    $impressionShareSearchParameter->Minimum = 0;
    $searchParameters[] = new SoapVar(
        $impressionShareSearchParameter, 
        SOAP_ENC_OBJECT, 
        'ImpressionShareSearchParameter', 
        $searchParametersNamespace);

    $searchVolumeSearchParameter = new SearchVolumeSearchParameter();
    // Equivalent of 'value >= 50'
    $searchVolumeSearchParameter->Maximum = null;
    $searchVolumeSearchParameter->Minimum = 50;
    $searchParameters[] = new SoapVar(
        $searchVolumeSearchParameter, 
        SOAP_ENC_OBJECT, 
        'SearchVolumeSearchParameter', 
        $searchParametersNamespace);

    $suggestedBidSearchParameter = new SuggestedBidSearchParameter();
    // Equivalent of both 'value <= 50' and '0 <= value <= 50'
    $suggestedBidSearchParameter->Maximum = 50;
    $suggestedBidSearchParameter->Minimum = null;
    $searchParameters[] = new SoapVar(
        $suggestedBidSearchParameter,
         SOAP_ENC_OBJECT, 
         'SuggestedBidSearchParameter', 
         $searchParametersNamespace);

    // Setting the device criterion is not available in the 
    // 'Keyword Planner' -> 'Search for new keywords using a phrase, website, or category'
    // workflow in the Bing Ads web application.
    // The DeviceSearchParameter is optional and by default the keyword ideas data
    // are aggregated for all devices.
    $deviceSearchParameter = new DeviceSearchParameter();
    $deviceCriterion = new DeviceCriterion();
    // Possible values are All, Computers, Tablets, Smartphones
    $deviceCriterion->DeviceName = "All";
    $deviceSearchParameter->Device = new SoapVar(
        $deviceCriterion, SOAP_ENC_OBJECT, 
        'DeviceCriterion', 
        $criterionsNamespace);
    $searchParameters[] = new SoapVar(
        $deviceSearchParameter, 
        SOAP_ENC_OBJECT, 
        'DeviceSearchParameter', 
        $searchParametersNamespace);

    // If ExpandIdeas is false, the QuerySearchParameter is required.
    $expandIdeas = true;
    $getKeywordIdeasResponse = AdInsightExampleHelper::GetKeywordIdeas(
        $expandIdeas,
        $ideaAttributes,
        $searchParameters);
        
    $keywordIdeas = $getKeywordIdeasResponse->KeywordIdeas;

    if(!isset($getKeywordIdeasResponse->KeywordIdeas) || count($keywordIdeas) < 1)
    {
        printf("No keyword ideas are available for the specified search parameters.\n");
        return;
    }
    else
    {
        AdInsightExampleHelper::OutputArrayOfKeywordIdea($keywordIdeas);
    }


    // Let's get traffic estimates for each returned keyword idea.

    // The returned ad group ID within each keyword idea will either be null or negative.
    // Negative identifiers can be used to map the keyword ideas into suggested new ad groups. 
    // A null ad group identifier indicates that the keyword idea was sourced from your 
    // keyword idea search parameter.  

    // In this example we will use the suggested ad groups to request traffic estimates.
    // Each of the seed keyword ideas will be submitted in the same ad group estimator.

    $ideaAdGroupIds = array();
    foreach ($keywordIdeas->KeywordIdea as $keywordIdea)
    {
        $ideaAdGroupIds[] = $keywordIdea->AdGroupId;
    }
    $adGroupIds = array_unique($ideaAdGroupIds, SORT_REGULAR);
    $adGroupEstimatorCount = count($adGroupIds);

    // If any ad group IDs are null, traffic estimates for all of those keyword ideas
    // will be submitted via $adGroupEstimators[0]. If none of the ad group IDs are null,
    // then $adGroupEstimators[0] will correspond to keyword ideas where AdGroupId is -1.
    // Each KeywordIdea is assigned to an AdGroupEstimator below.

    $seedOffset = in_array(null, $adGroupIds) ? 0 : 1;
    
    $adGroupEstimators = array();
    for($index = 0; $index < $adGroupEstimatorCount; $index++)
    {
        $adGroupEstimator = new AdGroupEstimator();

        // The AdGroupId is reserved for future use.
        // The traffic estimates are not based on any specific ad group. 
        $adGroupEstimator->AdGroupId = null;
            
        // We will add new keyword estimators while iterating the keyword ideas below.
        $adGroupEstimator->KeywordEstimators = array();

        // Optionally you can set an ad group level max CPC (maximum search bid)
        $adGroupEstimator->MaxCpc = 5.00;

        $adGroupEstimators[] = $adGroupEstimator;
    }

    foreach($keywordIdeas->KeywordIdea as $keywordIdea)
    {
        $keywordEstimator = new KeywordEstimator();
        $keyword = new Keyword();
        // The keyword Id is reserved for future use.
        // The returned estimates are not based on any specific keyword.
        $keyword->Id = null;
        // The match type is required. Exact, Broad, and Phrase are supported.
        $keyword->MatchType = MatchType::Exact;
        // Use the suggested keyword
        $keyword->Text = $keywordIdea->Keyword;
        $keywordEstimator->Keyword = $keyword;
        $keywordEstimator->MaxCpc = $keywordIdea->SuggestedBid > 0.04 ? $keywordIdea->SuggestedBid : null;
        
        $index = ($keywordIdea->AdGroupId != null) ? -($keywordIdea->AdGroupId) - $seedOffset : 0;
        
        $adGroupEstimators[$index]->KeywordEstimators[] = $keywordEstimator;
        
    }

    // Currently you can include only one CampaignEstimator per service call.

    $campaignEstimators = array();
    $campaignEstimator = new CampaignEstimator();
    
    // Let's use the ad group and keyword estimators that were sourced from keyword ideas above.

    $campaignEstimator->AdGroupEstimators = $adGroupEstimators;

    // The CampaignId is reserved for future use.
    // The returned estimates are not based on any specific campaign.

    $campaignEstimator->CampaignId = null;

    $campaignEstimator->DailyBudget = 50.00;

    $campaignEstimator->NegativeKeywords = array();
    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "foo";
    $negativeKeyword->MatchType = MatchType::Exact;
    $campaignEstimator->NegativeKeywords[] = $negativeKeyword;

    // The location, language, and network criterions are required for traffic estimates.

    $campaignEstimator->Criteria = array();

    // You must specify between 1 and 100 locations
    $locationSearchParameter->Locations = array();
    $locationCriterion = new LocationCriterion();
    // United States
    $locationCriterion->LocationId = 190;
    $campaignEstimator->Criteria[] = new SoapVar(
        $locationCriterion, 
        SOAP_ENC_OBJECT, 
        'LocationCriterion', 
        $criterionsNamespace);

    // You must specify exactly one language criterion
    $languageCriterion = new LanguageCriterion();
    $languageCriterion->Language = "English";
    $campaignEstimator->Criteria[] = new SoapVar(
        $languageCriterion, 
        SOAP_ENC_OBJECT, 
        'LanguageCriterion', 
        $criterionsNamespace);

    // You must specify exactly one network criterion
    $networkSearchParameter = new NetworkSearchParameter();
    $networkCriterion = new NetworkCriterion();
    $networkCriterion->Network = NetworkType::OwnedAndOperatedAndSyndicatedSearch;
    $campaignEstimator->Criteria[] = new SoapVar(
        $networkCriterion, 
        SOAP_ENC_OBJECT, 
        'NetworkCriterion', 
        $criterionsNamespace);

    // Optionally you can specify exactly one device.
    // If you do not specify a device, the returned traffic estimates 
    // are aggregated for all devices.
    // The "All" device name is equivalent to omitting the DeviceCriterion.
    $deviceCriterion = new DeviceCriterion();
    $deviceCriterion->DeviceName = "All";
    $campaignEstimator->Criteria[] = new SoapVar(
        $deviceCriterion, 
        SOAP_ENC_OBJECT, 
        'DeviceCriterion', 
        $criterionsNamespace);

    $campaignEstimators[] = $campaignEstimator;
    
    $getKeywordTrafficEstimatesResponse = AdInsightExampleHelper::GetKeywordTrafficEstimates($campaignEstimators);
    
    AdInsightExampleHelper::OutputArrayOfCampaignEstimate($getKeywordTrafficEstimatesResponse->CampaignEstimates);

}
catch (SoapFault $e)
{
	print "\nLast SOAP request/response:\n";
    printf("Fault Code: %s\nFault String: %s\n", $e->faultcode, $e->faultstring);
	print $GLOBALS['Proxy']->GetWsdl() . "\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
	print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";
	
    if (isset($e->detail->AdApiFaultDetail))
    {
        AdInsightExampleHelper::OutputAdApiFaultDetail($e->detail->AdApiFaultDetail);
        
    }
    elseif (isset($e->detail->ApiFaultDetail))
    {
        AdInsightExampleHelper::OutputApiFaultDetail($e->detail->ApiFaultDetail);
    }
}
catch (Exception $e)
{
    // Ignore fault exceptions that we already caught.
    if ($e->getPrevious())
    { ; }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}
