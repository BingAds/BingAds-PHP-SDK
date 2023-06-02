<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the keyword and percentage of users by age and gender (if known) who searched for the specified keyword.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keyworddemographicresult?view=bingads-13 KeywordDemographicResult Data Object
     * 
     * @uses KeywordDemographic
     * @used-by GetKeywordDemographicsResponse
     */
    final class KeywordDemographicResult
    {
        /**
         * The keyword.
         * @var string
         */
        public $Keyword;

        /**
         * An array of KeywordDemographic data objects that contains the percentage of users by age and gender (if known) that searched for the keyword on the device.
         * @var KeywordDemographic[]
         */
        public $KeywordDemographics;
    }

}
