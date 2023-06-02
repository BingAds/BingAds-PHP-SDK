<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Contains a list of suggested keywords for the ad group with minimum and maximum traffic estimates.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/adgroupestimate?view=bingads-13 AdGroupEstimate Data Object
     * 
     * @uses KeywordEstimate
     * @used-by CampaignEstimate
     */
    final class AdGroupEstimate
    {
        /**
         * The ad group identifier.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The list of suggested keywords with minimum and maximum traffic estimates.
         * @var KeywordEstimate[]
         */
        public $KeywordEstimates;
    }

}
