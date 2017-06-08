<?php
// Generated on 6/7/2017 5:54:05 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines the possible keyword opportunity types you can request when calling GetKeywordOpportunities.
     * @link http://msdn.microsoft.com/en-us/library/mt219346(v=msads.100).aspx KeywordOpportunityType Value Set
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
