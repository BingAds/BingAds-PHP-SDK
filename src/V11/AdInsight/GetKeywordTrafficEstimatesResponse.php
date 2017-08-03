<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Provides traffic estimates for keywords e.
     * @link http://msdn.microsoft.com/en-us/library/mt784428(v=msads.110).aspx GetKeywordTrafficEstimates Response Object
     * 
     * @uses CampaignEstimate
     * @used-by BingAdsAdInsightService::GetKeywordTrafficEstimates
     */
    final class GetKeywordTrafficEstimatesResponse
    {
        /**
         * The list of campaign estimates.
         * @var CampaignEstimate[]
         */
        public $CampaignEstimates;
    }
}
