<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the possible keyword opportunity types you can request when calling GetKeywordOpportunities.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordopportunitytype?view=bingads-13 KeywordOpportunityType Value Set
     * 
     * @used-by GetKeywordOpportunitiesRequest
     */
    final class KeywordOpportunityType
    {
        /** The keyword opportunity will be suggested based on the marketplace impact of adding keywords with the broad match type. */
        const BroadMatch = 'BroadMatch';

        /** The keyword opportunity will be suggested based on the full context of the campaign, including existing keywords, landing page, and ad copy. */
        const CampaignContext = 'CampaignContext';
    }

}
