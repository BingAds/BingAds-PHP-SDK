<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains a keyword and corresponding match types.
     * @link http://msdn.microsoft.com/en-us/library/mt219342(v=msads.110).aspx KeywordAndMatchType Data Object
     * 
     * @uses MatchType
     * @used-by GetEstimatedBidByKeywordsRequest
     */
    final class KeywordAndMatchType
    {
        /**
         * The keyword text.
         * @var string
         */
        public $KeywordText;

        /**
         * The corresponding match types for the keyword.
         * @var MatchType[]
         */
        public $MatchTypes;
    }

}
