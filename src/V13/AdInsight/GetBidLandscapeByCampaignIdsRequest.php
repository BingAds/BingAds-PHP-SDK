<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Given a list of existing campaigns, this operation returns for each a list of suggested bids and estimated performance statistics.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getbidlandscapebycampaignids?view=bingads-13 GetBidLandscapeByCampaignIds Request Object
     * 
     * @used-by BingAdsAdInsightService::GetBidLandscapeByCampaignIds
     */
    final class GetBidLandscapeByCampaignIdsRequest
    {
        /**
         * The campaign identifiers.
         * @var integer[]
         */
        public $CampaignIds;
    }
}
