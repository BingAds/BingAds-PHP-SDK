<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";


use SoapVar;
use SoapFault;
use Exception;
use DateTime;

// Specify the Microsoft\BingAds\V12\AdInsight classes that will be used.
use Microsoft\BingAds\V12\AdInsight\GetBudgetOpportunitiesRequest;
use Microsoft\BingAds\V12\AdInsight\GetDomainCategoriesRequest;
use Microsoft\BingAds\V12\AdInsight\GetKeywordIdeaCategoriesRequest;
use Microsoft\BingAds\V12\AdInsight\GetKeywordIdeasRequest;
use Microsoft\BingAds\V12\AdInsight\GetKeywordTrafficEstimatesRequest;

final class AdInsightExampleHelper {

    static function GetBudgetOpportunities($campaignId)
    {
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetBudgetOpportunitiesRequest();
        $request->CampaignId = $campaignId;

        return $GLOBALS['AdInsightProxy']->GetService()->GetBudgetOpportunities($request);
    }

    static function GetDomainCategories($domainName, $language)
    {
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetDomainCategoriesRequest();
        $request->DomainName = $domainName;
        $request->Language = $language;

        return $GLOBALS['AdInsightProxy']->GetService()->GetDomainCategories($request);
    }

    static function GetKeywordIdeaCategories()
    {
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetKeywordIdeaCategoriesRequest();

        return $GLOBALS['AdInsightProxy']->GetService()->GetKeywordIdeaCategories($request);
    }

    static function GetKeywordIdeas(
        $expandIdeas,
        $ideaAttributes,
        $searchParameters)
    {
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetKeywordIdeasRequest();
        $request->ExpandIdeas = $expandIdeas;
        $request->IdeaAttributes = $ideaAttributes;
        $request->SearchParameters = $searchParameters;

        return $GLOBALS['AdInsightProxy']->GetService()->GetKeywordIdeas($request);
    }

    static function GetKeywordTrafficEstimates($campaignEstimators)
    {
        $GLOBALS['Proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetKeywordTrafficEstimatesRequest();
        $request->CampaignEstimators = $campaignEstimators;

        return $GLOBALS['AdInsightProxy']->GetService()->GetKeywordTrafficEstimates($request);
    }

    
    static function OutputKeywordIdeas($keywordIdeas)
    {
        if ($keywordIdeas != null)
        {
            foreach ($keywordIdeas->KeywordIdea as $keywordIdea)
            {
                if ($keywordIdea != null)
                {
                    printf("AdGroupId: %s\n", $keywordIdea->AdGroupId);
                    printf("AdGroupName: %s\n", $keywordIdea->AdGroupName);
                    printf("AdImpressionShare: %s\n", $keywordIdea->AdImpressionShare);
                    printf("Competition: %s\n", $keywordIdea->Competition);
                    printf("Keyword: %s\n", $keywordIdea->Keyword);
                    $monthCount = count($keywordIdea->MonthlySearchCounts->long);
                    if ($monthCount > 0)
                    {
                        date_default_timezone_set('UTC');
                        $now = new DateTime(gmdate('Y-m-d H:i:s', time()));

                        printf("MonthlySearchCounts for last %s months:\n", $monthCount);
                        $previousMonths = "-" . $monthCount . " month";
                        $countDuration = $now->modify($previousMonths);

                        for ($index = 0; $index < $monthCount; $index++)
                        {
                            printf("%s/%s: %s\n",
                                date_format($countDuration,"m"),
                                date_format($countDuration,"Y"),
                                $keywordIdea->MonthlySearchCounts->long[$index]);
                            $countDuration = $countDuration->modify('+1 month');
                        }

                        printf("Average MonthlySearchCounts (Client Side Calculation): %s\n",
                            array_sum($keywordIdea->MonthlySearchCounts->long) / $monthCount);
                    }
                    printf("Relevance: %s\n", $keywordIdea->Relevance);
                    printf("Source: %s\n", $keywordIdea->Source);
                    printf("SuggestedBid: %s\n", $keywordIdea->SuggestedBid);
                    printf("\n");
                }
            }
        }
    }

    static function OutputCampaignEstimates($campaignEstimates)
    {
        if ($campaignEstimates != null)
        {
            foreach ($campaignEstimates->CampaignEstimate as $campaignEstimate)
            {
                printf("CampaignId: %s\n", $campaignEstimate->CampaignId);
                AdInsightExampleHelper::OutputAdGroupEstimates($campaignEstimate->AdGroupEstimates);
            }
        }
    }

    static function OutputAdGroupEstimates($adGroupEstimates)
    {
        if ($adGroupEstimates != null)
        {
            foreach ($adGroupEstimates->AdGroupEstimate as $adGroupEstimate)
            {
                printf("AdGroupId: %s\n", $adGroupEstimate->AdGroupId);
                AdInsightExampleHelper::OutputKeywordEstimates($adGroupEstimate->KeywordEstimates);
            }
        }
    }

    static function OutputKeywordEstimates($keywordEstimates)
    {
        if ($keywordEstimates != null)
        {
            foreach ($keywordEstimates->KeywordEstimate as $keywordEstimate)
            {
                printf("KeywordEstimate Keyword:\n");
                AdInsightExampleHelper::OutputKeyword($keywordEstimate->Keyword);
                printf("KeywordEstimate Maximum TrafficEstimate:\n");
                AdInsightExampleHelper::OutputTrafficEstimate($keywordEstimate->Maximum);
                printf("KeywordEstimate Minimum TrafficEstimate:\n");
                AdInsightExampleHelper::OutputTrafficEstimate($keywordEstimate->Minimum);
                printf("\n");
            }
        }
    }

    static function OutputKeyword($keyword)
    {
        if ($keyword != null)
        {
           printf("Id: %s\n", $keyword->Id);
           printf("MatchType: %s\n", $keyword->MatchType);
           printf("Text: %s\n", $keyword->Text);
        }
    }

    static function OutputTrafficEstimate($estimate)
    {
        if ($estimate != null)
        {
           printf("AverageCpc: %s\n", $estimate->AverageCpc);
           printf("AveragePosition: %s\n", $estimate->AveragePosition);
           printf("Clicks: %s\n", $estimate->Clicks);
           printf("Ctr: %s\n", $estimate->Ctr);
           printf("Impressions: %s\n", $estimate->Impressions);
           printf("TotalCost: %s\n", $estimate->TotalCost);
        }
    }

    static function OutputBudgetOpportunities($opportunities, $campaignId)
    {
        if (!empty($opportunities->Opportunity))
        {
            foreach ($opportunities->BudgetOpportunity as $opportunity) 
            {
                print "BudgetPoints: \n";
                foreach ($opportunity->BudgetPoints as $budgetPoint) 
                {
                    AdInsightExampleHelper::OutputBudgetPoint($budgetPoint);
                }
                printf("BudgetType: %s\n", $opportunity->BudgetType);
                printf("CampaignId: %s\n", $opportunity->CampaignId);
                printf("CurrentBudget: %s\n", $opportunity->CurrentBudget);
                printf("IncreaseInClicks: %s\n", $opportunity->IncreaseInClicks);
                printf("IncreaseInImpressions: %s\n", $opportunity->IncreaseInImpressions);
                printf("OpportunityKey: %s\n", $opportunity->OpportunityKey);
                printf("PercentageIncreaseInClicks: %s\n", $opportunity->PercentageIncreaseInClicks);
                printf("PercentageIncreaseInImpressions: %s\n", $opportunity->PercentageIncreaseInImpressions);
                printf("RecommendedBudget: %s\n", $opportunity->RecommendedBudget);
            }
        }
        else
        {
            printf("There are no budget opportunities for CampaignId: %s\n", $campaignId);
        }
    }

    // Outputs the BudgetPoint object.

    static function OutputBudgetPoint($budgetPoint)
    {
        if ($budgetPoint != null)
        {
        printf("BudgetAmount: %s\n", $budgetPoint->BudgetAmount);
            printf("BudgetPointType: %s\n", $budgetPoint->BudgetPointType);
            printf("EstimatedWeeklyClicks: %s\n", $budgetPoint->EstimatedWeeklyClicks);
            printf("EstimatedWeeklyCost: %s\n", $budgetPoint->EstimatedWeeklyCost);
            printf("EstimatedWeeklyImpressions: %s\n", $budgetPoint->EstimatedWeeklyImpressions);
        }
    }
    
}
