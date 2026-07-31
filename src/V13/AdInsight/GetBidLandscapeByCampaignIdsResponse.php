<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Given a list of existing campaigns, this operation returns for each a list of suggested bids and estimated performance statistics.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getbidlandscapebycampaignids?view=bingads-13 GetBidLandscapeByCampaignIds Response Object
     * 
     * @uses CampaignBidLandscape
     * @used-by BingAdsAdInsightService::GetBidLandscapeByCampaignIds
     */
    final class GetBidLandscapeByCampaignIdsResponse
    {
        /**
         * An array of CampaignBidLandscape objects.
         * @var CampaignBidLandscape[]
         */
        public $BidLandscape;
    }
}
