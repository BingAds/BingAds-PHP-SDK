<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a data object for UseBroadMatchKeywordRecommendation.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/usebroadmatchkeywordrecommendation?view=bingads-13 UseBroadMatchKeywordRecommendation Data Object
     */
    final class UseBroadMatchKeywordRecommendation extends RecommendationBase
    {
        /**
         * The current match type.
         * @var integer
         */
        public $CurrentMatchType;

        /**
         * The current status.
         * @var string
         */
        public $CurrentStatus;

        /**
         * The keyword.
         * @var string
         */
        public $Keyword;

        /**
         * The ID of the keyword order item.
         * @var integer
         */
        public $KeywordOrderItemId;

        /**
         * The suggested bid.
         * @var double
         */
        public $SuggestedBid;

        /**
         * The suggested match type.
         * @var integer
         */
        public $SuggestedMatchType;

        /**
         * The suggested status.
         * @var string
         */
        public $SuggestedStatus;
    }

}
