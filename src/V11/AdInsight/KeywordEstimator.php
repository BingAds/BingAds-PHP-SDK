<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Contains a keyword estimators with your keyword level filter criteria for traffic estimates.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/keywordestimator?view=bingads-11 KeywordEstimator Data Object
     * 
     * @uses Keyword
     * @used-by AdGroupEstimator
     */
    final class KeywordEstimator
    {
        /**
         * The keyword used for traffic estimates.
         * @var Keyword
         */
        public $Keyword;

        /**
         * The maximum cost per click filter criteria for the keyword.
         * @var double
         */
        public $MaxCpc;
    }

}
