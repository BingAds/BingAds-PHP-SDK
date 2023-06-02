<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets auction insight data for an account, campaigns, ad groups, or keywords.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getauctioninsightdata?view=bingads-13 GetAuctionInsightData Response Object
     * 
     * @uses AuctionInsightResult
     * @used-by BingAdsAdInsightService::GetAuctionInsightData
     */
    final class GetAuctionInsightDataResponse
    {
        /**
         * Includes the auction insight entries for the requested entity, date range, and segment search parameters.
         * @var AuctionInsightResult
         */
        public $Result;
    }
}
