<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets a list of keyword traffic estimates based on your criteria and filters.
     * @link http://msdn.microsoft.com/en-us/library/mt784428(v=msads.110).aspx GetKeywordTrafficEstimates Request Object
     * 
     * @uses CampaignEstimator
     * @used-by BingAdsAdInsightService::GetKeywordTrafficEstimates
     */
    final class GetKeywordTrafficEstimatesRequest
    {
        /**
         * Defines your campaign, ad group, and keyword level criteria and filters for the requested keyword traffic estimates.
         * @var CampaignEstimator[]
         */
        public $CampaignEstimators;
    }
}
