<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Gets auction insight data.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getauctioninsightdata?view=bingads-12 GetAuctionInsightData Response Object
     * 
     * @uses AuctionInsightResult
     * @used-by BingAdsAdInsightService::GetAuctionInsightData
     */
    final class GetAuctionInsightDataResponse
    {
        /**
         * Reserved.
         * @var AuctionInsightResult
         */
        public $Result;
    }
}
