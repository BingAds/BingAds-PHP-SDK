<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the age and gender of users who have searched for the specified keywords.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getkeyworddemographics?view=bingads-13 GetKeywordDemographics Response Object
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
