<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Contains a keyword estimators with your keyword level filter criteria for traffic estimates.
     * @link http://msdn.microsoft.com/en-us/library/mt784398(v=msads.110).aspx KeywordEstimator Data Object
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
