<?php

namespace Microsoft\BingAds\Samples\V13;

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
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\AdInsightExampleHelper;

// Specify the Microsoft\BingAds\V13\AdInsight classes that will be used.
use Microsoft\BingAds\V13\AdInsight\KeywordIdeaAttribute;
use Microsoft\BingAds\V13\AdInsight\SearchParameter;
use Microsoft\BingAds\V13\AdInsight\DateRangeSearchParameter;
use Microsoft\BingAds\V13\AdInsight\DayMonthAndYear;
use Microsoft\BingAds\V13\AdInsight\CategorySearchParameter;
use Microsoft\BingAds\V13\AdInsight\QuerySearchParameter;
use Microsoft\BingAds\V13\AdInsight\UrlSearchParameter;
use Microsoft\BingAds\V13\AdInsight\LanguageSearchParameter;
use Microsoft\BingAds\V13\AdInsight\Criterion;
use Microsoft\BingAds\V13\AdInsight\LanguageCriterion;
use Microsoft\BingAds\V13\AdInsight\LocationSearchParameter;
use Microsoft\BingAds\V13\AdInsight\LocationCriterion;
use Microsoft\BingAds\V13\AdInsight\NetworkSearchParameter;
use Microsoft\BingAds\V13\AdInsight\NetworkCriterion;
use Microsoft\BingAds\V13\AdInsight\NetworkType;
use Microsoft\BingAds\V13\AdInsight\CompetitionSearchParameter;
use Microsoft\BingAds\V13\AdInsight\CompetitionLevel;
use Microsoft\BingAds\V13\AdInsight\ExcludeAccountKeywordsSearchParameter;
use Microsoft\BingAds\V13\AdInsight\IdeaTextSearchParameter;
use Microsoft\BingAds\V13\AdInsight\Keyword;
use Microsoft\BingAds\V13\AdInsight\MatchType;
use Microsoft\BingAds\V13\AdInsight\ImpressionShareSearchParameter;
use Microsoft\BingAds\V13\AdInsight\SearchVolumeSearchParameter;
use Microsoft\BingAds\V13\AdInsight\SuggestedBidSearchParameter;
use Microsoft\BingAds\V13\AdInsight\DeviceSearchParameter;
use Microsoft\BingAds\V13\AdInsight\DeviceCriterion;
use Microsoft\BingAds\V13\AdInsight\AdGroupEstimator;
use Microsoft\BingAds\V13\AdInsight\KeywordEstimator;
use Microsoft\BingAds\V13\AdInsight\CampaignEstimator;
use Microsoft\BingAds\V13\AdInsight\AdGroupEstimate;
use Microsoft\BingAds\V13\AdInsight\KeywordEstimate;
use Microsoft\BingAds\V13\AdInsight\CampaignEstimate;
use Microsoft\BingAds\V13\AdInsight\NegativeKeyword;

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    print("-----\r\nGetKeywordIdeaCategories:\r\n");
    $getKeywordIdeaCategoriesResponse = AdInsightExampleHelper::GetKeywordIdeaCategories();
    $categoryId = $getKeywordIdeaCategoriesResponse->KeywordIdeaCategories->KeywordIdeaCategory[0]->CategoryId;
    printf("CategoryId %s will be used in the CategorySearchParameter below\r\n", $categoryId);
    
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
    $dateRangeSearchParameterEndDate->Day = 30;
    $dateRangeSearchParameterEndDate->Month = 9;
    $dateRangeSearchParameterEndDate->Year = 2018;
    $dateRangeSearchParameter->EndDate = $dateRangeSearchParameterEndDate;
    $dateRangeSearchParameterStartDate = new DayMonthAndYear();
    $dateRangeSearchParameterStartDate->Day = 1;
    $dateRangeSearchParameterStartDate->Month = 9;
    $dateRangeSearchParameterStartDate->Year = 2018;
    $dateRangeSearchParameter->StartDate = $dateRangeSearchParameterStartDate;
    $searchParameters[] = new SoapVar(
        $dateRangeSearchParameter, 
        SOAP_ENC_OBJECT, 
        'DateRangeSearchParameter', 
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );
    
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
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );

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
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );

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
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );
    
    // The LanguageSearchParameter, LocationSearchParameter, and NetworkSearchParameter
    // correspond to the 'Keyword Planner' -> 'Search for new keywords using a phrase, website, or category' ->
    // 'Targeting' workflow in the Bing Ads web application.
    // Each of these search parameters are required.

    $languageSearchParameter = new LanguageSearchParameter();
    $languageCriterion = new LanguageCriterion();
    $languageCriterion->Language = "English";
    // You must specify exactly one language
    $languageSearchParameter->Languages[] = new SoapVar(
        $languageCriterion, 
        SOAP_ENC_OBJECT, 
        'LanguageCriterion', 
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );
    $searchParameters[] = new SoapVar(
        $languageSearchParameter, 
        SOAP_ENC_OBJECT, 
        'LanguageSearchParameter', 
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );

    $locationSearchParameter = new LocationSearchParameter();
    $locationSearchParameter->Locations = array();
    $locationCriterion = new LocationCriterion();
    // United States
    $locationCriterion->LocationId = 190;
    // You must specify between 1 and 100 locations
    $locationSearchParameter->Locations[] = new SoapVar(
        $locationCriterion, 
        SOAP_ENC_OBJECT, 
        'LocationCriterion', 
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );
    $searchParameters[] = new SoapVar(
        $locationSearchParameter, 
        SOAP_ENC_OBJECT, 
        'LocationSearchParameter', 
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );

    $networkSearchParameter = new NetworkSearchParameter();
    $networkCriterion = new NetworkCriterion();
    $networkCriterion->Network = NetworkType::OwnedAndOperatedAndSyndicatedSearch;
    $networkSearchParameter->Network = new SoapVar(
        $networkCriterion, 
        SOAP_ENC_OBJECT, 
        'NetworkCriterion', 
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );
    $searchParameters[] = new SoapVar(
        $networkSearchParameter, 
        SOAP_ENC_OBJECT, 
        'NetworkSearchParameter', 
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );

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
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );

    $excludeAccountKeywordsSearchParameter = new ExcludeAccountKeywordsSearchParameter();
    $excludeAccountKeywordsSearchParameter->ExcludeAccountKeywords = false;
    $searchParameters[] = new SoapVar(
        $excludeAccountKeywordsSearchParameter, 
        SOAP_ENC_OBJECT, 
        'ExcludeAccountKeywordsSearchParameter', 
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );

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
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );

    $impressionShareSearchParameter = new ImpressionShareSearchParameter();
    // Equivalent of '0 <= value <= 50'
    $impressionShareSearchParameter->Maximum = 50;
    $impressionShareSearchParameter->Minimum = 0;
    $searchParameters[] = new SoapVar(
        $impressionShareSearchParameter, 
        SOAP_ENC_OBJECT, 
        'ImpressionShareSearchParameter', 
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );

    $searchVolumeSearchParameter = new SearchVolumeSearchParameter();
    // Equivalent of 'value >= 50'
    $searchVolumeSearchParameter->Maximum = null;
    $searchVolumeSearchParameter->Minimum = 50;
    $searchParameters[] = new SoapVar(
        $searchVolumeSearchParameter, 
        SOAP_ENC_OBJECT, 
        'SearchVolumeSearchParameter', 
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );

    $suggestedBidSearchParameter = new SuggestedBidSearchParameter();
    // Equivalent of both 'value <= 50' and '0 <= value <= 50'
    $suggestedBidSearchParameter->Maximum = 50;
    $suggestedBidSearchParameter->Minimum = null;
    $searchParameters[] = new SoapVar(
        $suggestedBidSearchParameter,
         SOAP_ENC_OBJECT, 
         'SuggestedBidSearchParameter', 
         $GLOBALS['AdInsightProxy']->GetNamespace()
    );

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
        $GLOBALS['AdInsightProxy']->GetNamespace());
    $searchParameters[] = new SoapVar(
        $deviceSearchParameter, 
        SOAP_ENC_OBJECT, 
        'DeviceSearchParameter', 
        $GLOBALS['AdInsightProxy']->GetNamespace());

    // If ExpandIdeas is false, the QuerySearchParameter is required.
    $expandIdeas = true;
    print("-----\r\nGetKeywordIdeas:\r\n");
    $getKeywordIdeasResponse = AdInsightExampleHelper::GetKeywordIdeas(
        $expandIdeas,
        $ideaAttributes,
        $searchParameters
    );
        
    $keywordIdeas = $getKeywordIdeasResponse->KeywordIdeas;

    if(!isset($getKeywordIdeasResponse->KeywordIdeas) || count($keywordIdeas) < 1)
    {
        printf("No keyword ideas are available for the search parameters.\r\n");
        return;
    }
    
    print("KeywordIdeas:\r\n");
    AdInsightExampleHelper::OutputArrayOfKeywordIdea($keywordIdeas);

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
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );

    // You must specify exactly one language criterion
    $languageCriterion = new LanguageCriterion();
    $languageCriterion->Language = "English";
    $campaignEstimator->Criteria[] = new SoapVar(
        $languageCriterion, 
        SOAP_ENC_OBJECT, 
        'LanguageCriterion', 
        $GLOBALS['AdInsightProxy']->GetNamespace());

    // You must specify exactly one network criterion
    $networkSearchParameter = new NetworkSearchParameter();
    $networkCriterion = new NetworkCriterion();
    $networkCriterion->Network = NetworkType::OwnedAndOperatedAndSyndicatedSearch;
    $campaignEstimator->Criteria[] = new SoapVar(
        $networkCriterion, 
        SOAP_ENC_OBJECT, 
        'NetworkCriterion', 
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );

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
        $GLOBALS['AdInsightProxy']->GetNamespace()
    );

    $campaignEstimators[] = $campaignEstimator;
    
    print("-----\r\nGetKeywordTrafficEstimates:\r\n");
    $getKeywordTrafficEstimatesResponse = AdInsightExampleHelper::GetKeywordTrafficEstimates(
        $campaignEstimators
    );
    print("CampaignEstimates:\r\n");
    AdInsightExampleHelper::OutputArrayOfCampaignEstimate($getKeywordTrafficEstimatesResponse->CampaignEstimates);

}
catch (SoapFault $e)
{
	printf("-----\r\nFault Code: %s\r\nFault String: %s\r\nFault Detail: \r\n", $e->faultcode, $e->faultstring);
    var_dump($e->detail);
	print "-----\r\nLast SOAP request/response:\r\n";
    print $GLOBALS['Proxy']->GetWsdl() . "\r\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\r\n";
    print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\r\n";
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
