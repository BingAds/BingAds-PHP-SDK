<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * A suggested keyword with minimum and maximum traffic estimates.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordestimate?view=bingads-13 KeywordEstimate Data Object
     * 
     * @uses Keyword
     * @uses TrafficEstimate
     * @used-by AdGroupEstimate
     */
    final class KeywordEstimate
    {
        /**
         * The suggested keyword.
         * @var Keyword
         */
        public $Keyword;

        /**
         * The maximum traffic estimate.
         * @var TrafficEstimate
         */
        public $Maximum;

        /**
         * The minimum traffic estimate.
         * @var TrafficEstimate
         */
        public $Minimum;
    }

}
