<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains search query statistics of including broad match type keyword bids.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/broadmatchsearchquerykpi?view=bingads-13 BroadMatchSearchQueryKPI Data Object
     * 
     * @used-by BroadMatchKeywordOpportunity
     */
    final class BroadMatchSearchQueryKPI
    {
        /**
         * The average CTR for the search query.
         * @var double
         */
        public $AverageCTR;

        /**
         * The clicks for the search query.
         * @var double
         */
        public $Clicks;

        /**
         * The impressions for the search query.
         * @var integer
         */
        public $Impressions;

        /**
         * The SRPV for the search query.
         * @var integer
         */
        public $SRPV;

        /**
         * The search query corresponding to the keyword.
         * @var string
         */
        public $SearchQuery;
    }

}
