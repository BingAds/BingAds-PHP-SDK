<?php

namespace Microsoft\BingAds\Samples\v11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";
include "/AdInsightHelper.php";
include "/CampaignManagementHelper.php";
include "/CustomerManagementHelper.php";

use SoapVar;
use SoapFault;
use Exception;
use DateTime;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;
use Microsoft\BingAds\Samples\v11\AdInsightHelper;
use Microsoft\BingAds\Samples\v11\CustomerManagementHelper;

// Specify the Microsoft\BingAds\V11\AdInsight classes that will be used.
use Microsoft\BingAds\V11\AdInsight\KeywordIdeaAttribute;
use Microsoft\BingAds\V11\AdInsight\SearchParameter;
use Microsoft\BingAds\V11\AdInsight\DateRangeSearchParameter;
use Microsoft\BingAds\V11\AdInsight\DayMonthAndYear;
use Microsoft\BingAds\V11\AdInsight\CategorySearchParameter;
use Microsoft\BingAds\V11\AdInsight\QuerySearchParameter;
use Microsoft\BingAds\V11\AdInsight\UrlSearchParameter;
use Microsoft\BingAds\V11\AdInsight\LanguageSearchParameter;
use Microsoft\BingAds\V11\AdInsight\Criterion;
use Microsoft\BingAds\V11\AdInsight\LanguageCriterion;
use Microsoft\BingAds\V11\AdInsight\LocationSearchParameter;
use Microsoft\BingAds\V11\AdInsight\LocationCriterion;
use Microsoft\BingAds\V11\AdInsight\NetworkSearchParameter;
use Microsoft\BingAds\V11\AdInsight\NetworkCriterion;
use Microsoft\BingAds\V11\AdInsight\NetworkType;
use Microsoft\BingAds\V11\AdInsight\CompetitionSearchParameter;
use Microsoft\BingAds\V11\AdInsight\CompetitionLevel;
use Microsoft\BingAds\V11\AdInsight\ExcludeAccountKeywordsSearchParameter;
use Microsoft\BingAds\V11\AdInsight\IdeaTextSearchParameter;
use Microsoft\BingAds\V11\AdInsight\Keyword;
use Microsoft\BingAds\V11\AdInsight\MatchType;
use Microsoft\BingAds\V11\AdInsight\ImpressionShareSearchParameter;
use Microsoft\BingAds\V11\AdInsight\SearchVolumeSearchParameter;
use Microsoft\BingAds\V11\AdInsight\SuggestedBidSearchParameter;
use Microsoft\BingAds\V11\AdInsight\DeviceSearchParameter;
use Microsoft\BingAds\V11\AdInsight\DeviceCriterion;
use Microsoft\BingAds\V11\AdInsight\AdGroupEstimator;
use Microsoft\BingAds\V11\AdInsight\KeywordEstimator;
use Microsoft\BingAds\V11\AdInsight\CampaignEstimator;
use Microsoft\BingAds\V11\AdInsight\AdGroupEstimate;
use Microsoft\BingAds\V11\AdInsight\KeywordEstimate;
use Microsoft\BingAds\V11\AdInsight\CampaignEstimate;
use Microsoft\BingAds\V11\AdInsight\NegativeKeyword;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerProxy'] = null; 
$GLOBALS['CampaignProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // You should authenticate for Bing Ads production services with a Microsoft Account, 
    // instead of providing the Bing Ads username and password set. 
    
    //AuthHelper::AuthenticateWithOAuth();

    // However, authentication with a Microsoft Account is currently not supported in Sandbox,
    // so it is recommended that you set the UserName and Password in sandbox for testing.

    AuthHelper::AuthenticateWithUserName();

    $GLOBALS['CustomerProxy'] = new ServiceClient(ServiceClientType::CustomerManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $user = CustomerManagementHelper::GetUser(null)->User;

    // For this example we'll use the first account.

    $accounts = CustomerManagementHelper::SearchAccountsByUserId($user->Id)->Accounts;
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['AdInsightProxy'] = new ServiceClient(ServiceClientType::AdInsightVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    $searchParametersNamespace = "http://schemas.datacontract.org/2004/07/Microsoft.BingAds.Advertiser.AdInsight.Api.DataContract.V11.Entity.SearchParameters";
    $criterionsNamespace = "http://schemas.datacontract.org/2004/07/Microsoft.BingAds.Advertiser.AdInsight.Api.DataContract.V11.Entity.Criterions";
        
    $getKeywordIdeaCategoriesResponse = AdInsightHelper::GetKeywordIdeaCategories();
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
    $searchParameters[] = new SoapVar($dateRangeSearchParameter, SOAP_ENC_OBJECT, 'DateRangeSearchParameter', $searchParametersNamespace);
    
    // The CategorySearchParameter corresponds to filling in 'Your product category' under
    // 'Search for new keywords using a phrase, website, or category' in the 
    // Bing Ads web application's Keyword Planner tool.
    // One or more CategorySearchParameter, QuerySearchParameter, or UrlSearchParameter is required.
    
    $categorySearchParameter = new CategorySearchParameter();
    $categorySearchParameter->CategoryId = $categoryId;
    $searchParameters[] = new SoapVar($categorySearchParameter, SOAP_ENC_OBJECT, 'CategorySearchParameter', $searchParametersNamespace);

    // The QuerySearchParameter corresponds to filling in 'Product or service' under
    // 'Search for new keywords using a phrase, website, or category' in the 
    // Bing Ads web application's Keyword Planner tool.
    // One or more CategorySearchParameter, QuerySearchParameter, or UrlSearchParameter is required.
    // When calling GetKeywordIdeas, if ExpandIdeas = false the QuerySearchParameter is required. 

    $querySearchParameter = new QuerySearchParameter();
    $querySearchParameter->Queries = array("tennis", "tennis shoes", "running", "running shoes", "cross training", "running");
    $searchParameters[] = new SoapVar($querySearchParameter, SOAP_ENC_OBJECT, 'QuerySearchParameter', $searchParametersNamespace);

    // The UrlSearchParameter corresponds to filling in 'Your landing page' under
    // 'Search for new keywords using a phrase, website, or category' in the 
    // Bing Ads web application's Keyword Planner tool.
    // One or more CategorySearchParameter, QuerySearchParameter, or UrlSearchParameter is required.

    $urlSearchParameter = new UrlSearchParameter();
    $urlSearchParameter->Url = "contoso.com";
    $searchParameters[] = new SoapVar($urlSearchParameter, SOAP_ENC_OBJECT, 'UrlSearchParameter', $searchParametersNamespace);
    
    // The LanguageSearchParameter, LocationSearchParameter, and NetworkSearchParameter
    // correspond to the 'Keyword Planner' -> 'Search for new keywords using a phrase, website, or category' ->
    // 'Targeting' workflow in the Bing Ads web application.
    // Each of these search parameters are required.

    $languageSearchParameter = new LanguageSearchParameter();
    $languageCriterion = new LanguageCriterion();
    $languageCriterion->Language = "English";
    $languageSearchParameter->Languages[] = new SoapVar($languageCriterion, SOAP_ENC_OBJECT, 'LanguageCriterion', $criterionsNamespace);
    $searchParameters[] = new SoapVar($languageSearchParameter, SOAP_ENC_OBJECT, 'LanguageSearchParameter', $searchParametersNamespace);

    $locationSearchParameter = new LocationSearchParameter();
    $locationSearchParameter->Locations = array();
    $locationCriterion = new LocationCriterion();
    // United States
    $locationCriterion->LocationId = 190;
    $locationSearchParameter->Locations[] = new SoapVar($locationCriterion, SOAP_ENC_OBJECT, 'LocationCriterion', $criterionsNamespace);
    $searchParameters[] = new SoapVar($locationSearchParameter, SOAP_ENC_OBJECT, 'LocationSearchParameter', $searchParametersNamespace);

    $networkSearchParameter = new NetworkSearchParameter();
    $networkCriterion = new NetworkCriterion();
    $networkCriterion->Network = NetworkType::OwnedAndOperatedAndSyndicatedSearch;
    $networkSearchParameter->Network = new SoapVar($networkCriterion, SOAP_ENC_OBJECT, 'NetworkCriterion', $criterionsNamespace);
    $searchParameters[] = new SoapVar($networkSearchParameter, SOAP_ENC_OBJECT, 'NetworkSearchParameter', $searchParametersNamespace);

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
    $searchParameters[] = new SoapVar($competitionSearchParameter, SOAP_ENC_OBJECT, 'CompetitionSearchParameter', $searchParametersNamespace);

    $excludeAccountKeywordsSearchParameter = new ExcludeAccountKeywordsSearchParameter();
    $excludeAccountKeywordsSearchParameter->ExcludeAccountKeywords = false;
    $searchParameters[] = new SoapVar($excludeAccountKeywordsSearchParameter, SOAP_ENC_OBJECT, 'ExcludeAccountKeywordsSearchParameter', $searchParametersNamespace);

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
    $searchParameters[] = new SoapVar($ideaTextSearchParameter, SOAP_ENC_OBJECT, 'IdeaTextSearchParameter', $searchParametersNamespace);

    $impressionShareSearchParameter = new ImpressionShareSearchParameter();
    // Equivalent of '0 <= value <= 50'
    $impressionShareSearchParameter->Maximum = 50;
    $impressionShareSearchParameter->Minimum = 0;
    $searchParameters[] = new SoapVar($impressionShareSearchParameter, SOAP_ENC_OBJECT, 'ImpressionShareSearchParameter', $searchParametersNamespace);

    $searchVolumeSearchParameter = new SearchVolumeSearchParameter();
    // Equivalent of 'value >= 50'
    $searchVolumeSearchParameter->Maximum = null;
    $searchVolumeSearchParameter->Minimum = 50;
    $searchParameters[] = new SoapVar($searchVolumeSearchParameter, SOAP_ENC_OBJECT, 'SearchVolumeSearchParameter', $searchParametersNamespace);

    $suggestedBidSearchParameter = new SuggestedBidSearchParameter();
    // Equivalent of both 'value <= 50' and '0 <= value <= 50'
    $suggestedBidSearchParameter->Maximum = 50;
    $suggestedBidSearchParameter->Minimum = null;
    $searchParameters[] = new SoapVar($suggestedBidSearchParameter, SOAP_ENC_OBJECT, 'SuggestedBidSearchParameter', $searchParametersNamespace);

    // Setting the device criterion is not available in the 
    // 'Keyword Planner' -> 'Search for new keywords using a phrase, website, or category'
    // workflow in the Bing Ads web application.
    // The DeviceSearchParameter is optional and by default the keyword ideas data
    // are aggregated for all devices.
    $deviceSearchParameter = new DeviceSearchParameter();
    $deviceCriterion = new DeviceCriterion();
    // Possible values are All, Computers, Tablets, Smartphones
    $deviceCriterion->DeviceName = "All";
    $deviceSearchParameter->Device = new SoapVar($deviceCriterion, SOAP_ENC_OBJECT, 'DeviceCriterion', $criterionsNamespace);
    $searchParameters[] = new SoapVar($deviceSearchParameter, SOAP_ENC_OBJECT, 'DeviceSearchParameter', $searchParametersNamespace);

    // If ExpandIdeas is false, the QuerySearchParameter is required.
    $expandIdeas = true;
    $getKeywordIdeasResponse = AdInsightHelper::GetKeywordIdeas(
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
        AdInsightHelper::OutputKeywordIdeas($keywordIdeas);
    }


    // Let's get traffic estimates for each returned keyword idea.

    // The returned ad group ID within each keyword idea will either be null or negative.
    // Negative identifiers can be used to map the keyword ideas into suggested new ad groups. 
    // A null ad group identifier indicates that the keyword idea was sourced from your 
    // keyword idea search parameter.

    // In this example we will use the suggested ad groups to request traffic estimates.
    // Each of the seed keyword ideas will be submitted in the same ad group.

    $ideaAdGroupIds = array();
    foreach ($keywordIdeas->KeywordIdea as $keywordIdea)
    {
        $ideaAdGroupIds[] = $keywordIdea->AdGroupId;
    }
    $adGroupIds = array_unique($ideaAdGroupIds, SORT_REGULAR);
    $adGroupEstimatorCount = count($adGroupIds);
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
    $campaignEstimator->Criteria[] = new SoapVar($locationCriterion, SOAP_ENC_OBJECT, 'LocationCriterion', $criterionsNamespace);

    // You must specify exactly one language criterion
    $languageCriterion = new LanguageCriterion();
    $languageCriterion->Language = "English";
    $campaignEstimator->Criteria[] = new SoapVar($languageCriterion, SOAP_ENC_OBJECT, 'LanguageCriterion', $criterionsNamespace);

    // You must specify exactly one network criterion
    $networkSearchParameter = new NetworkSearchParameter();
    $networkCriterion = new NetworkCriterion();
    $networkCriterion->Network = NetworkType::OwnedAndOperatedAndSyndicatedSearch;
    $campaignEstimator->Criteria[] = new SoapVar($networkCriterion, SOAP_ENC_OBJECT, 'NetworkCriterion', $criterionsNamespace);

    // Optionally you can specify exactly one device.
    // If you do not specify a device, the returned traffic estimates 
    // are aggregated for all devices.
    // The "All" device name is equivalent to omitting the DeviceCriterion.
    $deviceCriterion = new DeviceCriterion();
    $deviceCriterion->DeviceName = "All";
    $campaignEstimator->Criteria[] = new SoapVar($deviceCriterion, SOAP_ENC_OBJECT, 'DeviceCriterion', $criterionsNamespace);

    $campaignEstimators[] = $campaignEstimator;
    
    $getKeywordTrafficEstimatesResponse = AdInsightHelper::GetKeywordTrafficEstimates($campaignEstimators);
    
    AdInsightHelper::OutputCampaignEstimates($getKeywordTrafficEstimatesResponse->CampaignEstimates);

}
catch (SoapFault $e)
{
	// Output the last request/response.
	
	print "\nLast SOAP request/response:\n";
    printf("Fault Code: %s\nFault String: %s\n", $e->faultcode, $e->faultstring);
	print $GLOBALS['Proxy']->GetWsdl() . "\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
	print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";
	
	// Ad Insight and Campaign Management service operations can throw AdApiFaultDetail.
	if (isset($e->detail->AdApiFaultDetail))
	{
		// Log this fault.

		print "The operation failed with the following faults:\n";

		$errors = is_array($e->detail->AdApiFaultDetail->Errors->AdApiError)
		? $e->detail->AdApiFaultDetail->Errors->AdApiError
		: array('AdApiError' => $e->detail->AdApiFaultDetail->Errors->AdApiError);

		// If the AdApiError array is not null, the following are examples of error codes that may be found.
		foreach ($errors as $error)
		{
			print "AdApiError\n";
			printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

			switch ($error->Code)
			{
				case 0:    // InternalError
					break;
				case 105:  // InvalidCredentials
					break;
				default:
					print "Please see documentation for more details about the error code output above.\n";
					break;
			}
		}
	}

	// Ad Insight service operations can throw ApiFaultDetail.
	elseif (isset($e->detail->ApiFaultDetail))
	{
		// Log this fault.

		print "The operation failed with the following faults:\n";

		// If the BatchError array is not null, the following are examples of error codes that may be found.
		if (!empty($e->detail->ApiFaultDetail->BatchErrors))
		{
			$errors = is_array($e->detail->ApiFaultDetail->BatchErrors->BatchError)
			? $e->detail->ApiFaultDetail->BatchErrors->BatchError
			: array('BatchError' => $e->detail->ApiFaultDetail->BatchErrors->BatchError);

			foreach ($errors as $error)
			{
				printf("BatchError at Index: %d\n", $error->Index);
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

				switch ($error->Code)
				{
					case 0:    // InternalError
						break;
					default:
						print "Please see documentation for more details about the error code output above.\n";
						break;
				}
			}
		}

		// If the OperationError array is not null, the following are examples of error codes that may be found.
		if (!empty($e->detail->ApiFaultDetail->OperationErrors))
		{
			$errors = is_array($e->detail->ApiFaultDetail->OperationErrors->OperationError)
			? $e->detail->ApiFaultDetail->OperationErrors->OperationError
			: array('OperationError' => $e->detail->ApiFaultDetail->OperationErrors->OperationError);

			foreach ($errors as $error)
			{
				print "OperationError\n";
				printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

				switch ($error->Code)
				{
					case 0:    // InternalError
						break;
					case 105:  // InvalidCredentials
						break;
					case 1102:  // InvalidAccountId
						break;
					default:
						print "Please see documentation for more details about the error code output above.\n";
						break;
				}
			}
		}
	}
}
catch (Exception $e)
{
    if ($e->getPrevious())
    {
        ; // Ignore fault exceptions that we already caught.
    }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}
