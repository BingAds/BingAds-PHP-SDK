<?php
// Generated on 6/7/2017 5:54:05 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets a list of keyword suggestions that are relevant to the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/mt219321(v=msads.100).aspx GetKeywordOpportunities Response Object
     * 
     * @uses KeywordOpportunity
     * @used-by BingAdsAdInsightService::GetKeywordOpportunities
     */
    final class GetKeywordOpportunitiesResponse
    {
        /**
         * A list of KeywordOpportunity data objects that identifies a suggested keyword and bid value.
         * @var KeywordOpportunity[]
         */
        public $Opportunities;
    }
}
