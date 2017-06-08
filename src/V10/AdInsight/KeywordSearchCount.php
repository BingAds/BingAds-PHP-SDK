<?php
// Generated on 6/7/2017 5:54:05 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains a list of search counts for each device and network where the keyword was included in a search query.
     * @link http://msdn.microsoft.com/en-us/library/mt219303(v=msads.100).aspx KeywordSearchCount Data Object
     * 
     * @uses SearchCountsByAttributes
     * @used-by GetHistoricalSearchCountResponse
     */
    final class KeywordSearchCount
    {
        /**
         * The keyword to which the search count data applies.
         * @var string
         */
        public $Keyword;

        /**
         * An array of SearchCountsByAttributes objects that contain search counts for each device and network where the keyword was included in a search query.
         * @var SearchCountsByAttributes[]
         */
        public $SearchCountsByAttributes;
    }

}
