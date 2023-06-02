<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains a list of search counts for each device and network where the keyword was included in a search query.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordsearchcount?view=bingads-13 KeywordSearchCount Data Object
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
