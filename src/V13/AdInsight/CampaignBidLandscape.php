<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the CampaignBidLandscape data object, which suggests bids or targets, and contains estimated performance statistics.
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
         * The campaign identifier.
         * @var integer
         */
        public $CampaignId;

        /**
         * Indicates the campaign bid strategy and landscape type.
         * @var CampaignBidLandscapeType
         */
        public $CampaignBidLandscapeType;

        /**
         * The first date used to calculate the bid landscape.
         * @var DayMonthAndYear
         */
        public $StartDate;

        /**
         * The most recent date used to calculate the bid landscape.
         * @var DayMonthAndYear
         */
        public $EndDate;

        /**
         * A list of CampaignBidLandscapePoint objects with the total estimated performance from StartDate to EndDate by the bid or target.
         * @var CampaignBidLandscapePoint[]
         */
        public $CampaignBidLandscapePoints;
    }

}
