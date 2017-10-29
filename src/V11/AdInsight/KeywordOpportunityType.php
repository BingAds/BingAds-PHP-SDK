<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines the possible keyword opportunity types you can request when calling GetKeywordOpportunities.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/keywordopportunitytype?version=11 KeywordOpportunityType Value Set
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
