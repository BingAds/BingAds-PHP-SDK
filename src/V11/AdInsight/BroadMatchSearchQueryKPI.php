<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains search query statistics of including broad match type keyword bids.
     * @link http://msdn.microsoft.com/en-us/library/mt219329(v=msads.110).aspx BroadMatchSearchQueryKPI Data Object
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
