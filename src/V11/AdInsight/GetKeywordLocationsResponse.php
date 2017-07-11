<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the geographical locations of users who have searched for the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/mt219328(v=msads.110).aspx GetKeywordLocations Response Object
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
