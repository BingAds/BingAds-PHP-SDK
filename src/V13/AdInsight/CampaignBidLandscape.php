<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/campaignbidlandscape?view=bingads-13 CampaignBidLandscape Data Object
     * 
     * @uses CampaignBidLandscapeType
     * @uses DayMonthAndYear
     * @uses CampaignBidLandscapePoint
     * @used-by GetBidLandscapeByCampaignIdsResponse
     */
    final class CampaignBidLandscape
    {
        /**
         * Reserved.
         * @var integer
         */
        public $CampaignId;

        /**
         * Reserved.
         * @var CampaignBidLandscapeType
         */
        public $CampaignBidLandscapeType;

        /**
         * Reserved.
         * @var DayMonthAndYear
         */
        public $StartDate;

        /**
         * Reserved.
         * @var DayMonthAndYear
         */
        public $EndDate;

        /**
         * Reserved.
         * @var CampaignBidLandscapePoint[]
         */
        public $CampaignBidLandscapePoints;
    }

}
