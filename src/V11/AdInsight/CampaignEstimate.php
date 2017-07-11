<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Contains a nested list of suggested keywords for the campaign's ad groups with minimum and maximum traffic estimates.
     * @link http://msdn.microsoft.com/en-us/library/mt784406(v=msads.110).aspx CampaignEstimate Data Object
     * 
     * @uses AdGroupEstimate
     * @used-by GetKeywordTrafficEstimatesResponse
     */
    final class CampaignEstimate
    {
        public $AdGroupEstimates;
        public $CampaignId;
    }

}
