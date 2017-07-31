<?php

namespace Microsoft\BingAds\Samples\V11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";


use SoapVar;
use SoapFault;
use Exception;


// Specify the Microsoft\BingAds\V11\AdInsight classes that will be used.
use Microsoft\BingAds\V11\AdInsight\GetBudgetOpportunitiesRequest;
use Microsoft\BingAds\V11\AdInsight\GetDomainCategoriesRequest;

final class AdInsightHelper {

    static function GetBudgetOpportunities($campaignId)
    {
        $GLOBALS['proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetBudgetOpportunitiesRequest();
        $request->CampaignId = $campaignId;

        return $GLOBALS['AdInsightProxy']->GetService()->GetBudgetOpportunities($request);
    }

    static function GetDomainCategories($domainName, $language)
    {
        $GLOBALS['proxy'] = $GLOBALS['AdInsightProxy'];

        $request = new GetDomainCategoriesRequest();
        $request->DomainName = $domainName;
        $request->Language = $language;

        return $GLOBALS['AdInsightProxy']->GetService()->GetDomainCategories($request);
    }

    // Outputs the list of BudgetOpportunity objects.

    static function OutputBudgetOpportunities($opportunities, $campaignId)
    {
        if (!empty($opportunities->Opportunity))
        {
        foreach ($opportunities->BudgetOpportunity as $opportunity) 
            {
                print "BudgetPoints: \n";
                foreach ($opportunity->BudgetPoints as $budgetPoint) 
                {
                    AdInsightHelper::OutputBudgetPoint($budgetPoint);
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

?>
