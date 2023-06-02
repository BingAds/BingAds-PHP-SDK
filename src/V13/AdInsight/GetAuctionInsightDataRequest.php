<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets auction insight data for an account, campaigns, ad groups, or keywords.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getauctioninsightdata?view=bingads-13 GetAuctionInsightData Request Object
     * 
     * @uses EntityType
     * @uses SearchParameter
     * @uses AuctionInsightKpiAdditionalField
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

        /**
         * The list of additional properties that you want included within each returned auction insight KPI.
         * @var AuctionInsightKpiAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
