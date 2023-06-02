<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Contains a keyword estimators with your keyword level filter criteria for traffic estimates.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordestimator?view=bingads-13 KeywordEstimator Data Object
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
