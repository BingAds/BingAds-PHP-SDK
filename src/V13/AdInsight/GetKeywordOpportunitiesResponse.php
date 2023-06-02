<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets a list of keyword suggestions that are relevant to the specified ad group.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getkeywordopportunities?view=bingads-13 GetKeywordOpportunities Response Object
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
