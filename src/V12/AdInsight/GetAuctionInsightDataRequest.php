<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Gets auction insight data.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getauctioninsightdata?view=bingads-12 GetAuctionInsightData Request Object
     * 
     * @uses EntityType
     * @uses SearchParameter
     * @used-by BingAdsAdInsightService::GetAuctionInsightData
     */
    final class GetAuctionInsightDataRequest
    {
        /**
         * Reserved.
         * @var EntityType
         */
        public $EntityType;

        /**
         * Reserved.
         * @var integer[]
         */
        public $EntityIds;

        /**
         * Reserved.
         * @var SearchParameter[]
         */
        public $SearchParameters;
    }
}
