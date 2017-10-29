<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Contains a list of suggested keywords for the ad group with minimum and maximum traffic estimates.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/adgroupestimate?version=11 AdGroupEstimate Data Object
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
