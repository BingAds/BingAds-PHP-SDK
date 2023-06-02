<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains traffic estimates based on the campaign, ad group, and keyword criteria you specified when calling GetKeywordTrafficEstimates.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/trafficestimate?view=bingads-13 TrafficEstimate Data Object
     * 
     * @used-by KeywordEstimate
     */
    final class TrafficEstimate
    {
        /**
         * The estimated average CPC.
         * @var double
         */
        public $AverageCpc;

        /**
         * The estimated average position on the web page for ads that were delivered.
         * @var double
         */
        public $AveragePosition;

        /**
         * The estimated number of clicks per week.
         * @var double
         */
        public $Clicks;

        /**
         * The estimated CTR.
         * @var double
         */
        public $Ctr;

        /**
         * The estimated number of impressions per week.
         * @var double
         */
        public $Impressions;

        /**
         * The estimated total cost per week.
         * @var double
         */
        public $TotalCost;
    }

}
