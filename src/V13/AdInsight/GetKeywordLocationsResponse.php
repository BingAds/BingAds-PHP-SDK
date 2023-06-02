<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the geographical locations of users who have searched for the specified keywords.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getkeywordlocations?view=bingads-13 GetKeywordLocations Response Object
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
