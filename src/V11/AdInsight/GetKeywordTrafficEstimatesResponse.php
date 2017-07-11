<?php
// Generated on 7/10/2017 3:08:16 PM

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
