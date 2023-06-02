<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Contains a nested list of suggested keywords for the campaign's ad groups with minimum and maximum traffic estimates.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/campaignestimate?view=bingads-13 CampaignEstimate Data Object
     * 
     * @uses AdGroupEstimate
     * @used-by GetKeywordTrafficEstimatesResponse
     */
    final class CampaignEstimate
    {
        /**
         * The nested list of suggested keywords for the campaign's ad groups with minimum and maximum traffic estimates.
         * @var AdGroupEstimate[]
         */
        public $AdGroupEstimates;

        /**
         * The ad group identifier.
         * @var integer
         */
        public $CampaignId;
    }

}
