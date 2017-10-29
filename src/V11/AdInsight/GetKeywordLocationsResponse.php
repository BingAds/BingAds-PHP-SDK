<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the geographical locations of users who have searched for the specified keywords.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getkeywordlocations?version=11 GetKeywordLocations Response Object
     * 
     * @uses KeywordLocationResult
     * @used-by BingAdsAdInsightService::GetKeywordLocations
     */
    final class GetKeywordLocationsResponse
    {
        /**
         * An array of KeywordLocationResult data objects.
         * @var KeywordLocationResult[]
         */
        public $KeywordLocationResult;
    }
}
