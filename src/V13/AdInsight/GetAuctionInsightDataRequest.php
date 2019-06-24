<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets auction insight data for an account, campaigns, ad groups, or keywords.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/getauctioninsightdata?view=bingads-13 GetAuctionInsightData Request Object
     * 
     * @uses EntityType
     * @uses SearchParameter
     * @used-by BingAdsAdInsightService::GetAuctionInsightData
     */
    final class GetAuctionInsightDataRequest
    {
        /**
         * The entity level that you want to request auction insight data.
         * @var EntityType
         */
        public $EntityType;

        /**
         * The Microsoft Advertising identifiers for up to 200 campaigns, ad groups, or keywords.
         * @var integer[]
         */
        public $EntityIds;

        /**
         * The search parameters define your criteria and filters for the auction insight data.
         * @var SearchParameter[]
         */
        public $SearchParameters;
    }
}
