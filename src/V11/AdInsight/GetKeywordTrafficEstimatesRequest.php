<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Provides traffic estimates for keywords e.
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
