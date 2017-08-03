<?php

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets the age and gender of users who have searched for the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/mt219307(v=msads.100).aspx GetKeywordDemographics Response Object
     * 
     * @uses KeywordDemographicResult
     * @used-by BingAdsAdInsightService::GetKeywordDemographics
     */
    final class GetKeywordDemographicsResponse
    {
        /**
         * An array of KeywordDemographicResult data objects.
         * @var KeywordDemographicResult[]
         */
        public $KeywordDemographicResult;
    }
}
