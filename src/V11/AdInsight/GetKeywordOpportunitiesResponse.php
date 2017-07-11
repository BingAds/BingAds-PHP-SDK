<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets a list of keyword suggestions that are relevant to the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/mt219321(v=msads.110).aspx GetKeywordOpportunities Response Object
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
