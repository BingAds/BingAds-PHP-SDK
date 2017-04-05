<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets the geographical locations of users who have searched for the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/mt219328(v=msads.100).aspx GetKeywordLocations Response Object
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
