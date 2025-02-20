<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a data object for RemoveConflictingNegativeKeywordRecommendation.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/removeconflictingnegativekeywordrecommendation?view=bingads-13 RemoveConflictingNegativeKeywordRecommendation Data Object
     */
    final class RemoveConflictingNegativeKeywordRecommendation extends RecommendationBase
    {
        /**
         * The negative keyword.
         * @var string
         */
        public $NegativeKeyword;

        /**
         * The ID of the negative keyword.
         * @var integer
         */
        public $NegativeKeywordId;

        /**
         * The list name of the negative keyword.
         * @var string
         */
        public $NegativeKeywordListName;

        /**
         * The match type of the negative keyword.
         * @var integer
         */
        public $NegativeKeywordMatchType;

        /**
         * The shared list ID of the negative keyword.
         * @var integer
         */
        public $NegativeKeywordSharedListId;

        /**
         * The source name.
         * @var string
         */
        public $Source;
    }

}
