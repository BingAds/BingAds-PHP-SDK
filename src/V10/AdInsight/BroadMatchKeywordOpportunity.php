<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains the marketplace impact statistics of including broad match type keyword bids.
     * @link http://msdn.microsoft.com/en-us/library/mt219315(v=msads.100).aspx BroadMatchKeywordOpportunity Data Object
     * 
     * @uses BroadMatchSearchQueryKPI
     */
    final class BroadMatchKeywordOpportunity extends KeywordOpportunity
    {
        /**
         * Broad match average CPC in the marketplace.
         * @var double
         */
        public $AverageCPC;

        /**
         * Broad match average CTR in the marketplace.
         * @var double
         */
        public $AverageCTR;

        /**
         * Broad match click share in the marketplace.
         * @var double
         */
        public $ClickShare;

        /**
         * Broad match impression share in the marketplace.
         * @var double
         */
        public $ImpressionShare;

        /**
         * The bid of an existing reference keyword used by the service to offer the keyword opportunity.
         * @var double
         */
        public $ReferenceKeywordBid;

        /**
         * The identifier of an existing reference keyword used by the service to offer the keyword opportunity.
         * @var integer
         */
        public $ReferenceKeywordId;

        /**
         * The match type of an existing reference keyword used by the service to offer the keyword opportunity.
         * @var integer
         */
        public $ReferenceKeywordMatchType;

        /**
         * A list of up to three broad match search query KPI objects.
         * @var BroadMatchSearchQueryKPI[]
         */
        public $SearchQueryKPIs;
    }

}
