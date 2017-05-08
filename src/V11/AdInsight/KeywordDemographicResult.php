<?php
// Generated on 5/7/2017 5:48:15 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the keyword and percentage of users by age and gender (if known) who searched for the specified keyword.
     * @link http://msdn.microsoft.com/en-us/library/mt219288(v=msads.110).aspx KeywordDemographicResult Data Object
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
