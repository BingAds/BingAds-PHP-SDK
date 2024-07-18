<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines  data object for the seasonality adjustment.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/seasonalityadjustment?view=bingads-13 SeasonalityAdjustment Data Object
     * 
     * @uses CampaignAssociation
     * @uses CampaignType
     * @uses DeviceType
     * @used-by AddSeasonalityAdjustmentsRequest
     * @used-by GetSeasonalityAdjustmentsByAccountIdResponse
     * @used-by GetSeasonalityAdjustmentsByIdsResponse
     * @used-by UpdateSeasonalityAdjustmentsRequest
     */
    final class SeasonalityAdjustment
    {
        /**
         * The percentage of the conversion rate adjustment.
         * @var double
         */
        public $AdjustmentPercentage;

        /**
         * Make the seasonality adjustment to these campaigns.
         * @var CampaignAssociation[]
         */
        public $CampaignAssociations;

        /**
         * Make the seasonality adjustment to these campaign types.
         * @var CampaignType
         */
        public $CampaignTypeFilter;

        /**
         * A description for the seasonality adjustment.
         * @var string
         */
        public $Description;

        /**
         * Make the seasonality adjustment to these device types.
         * @var DeviceType
         */
        public $DeviceTypeFilter;

        /**
         * The end date.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * The seasonality adjustment ID.
         * @var integer
         */
        public $Id;

        /**
         * The name of the seasonality adjustment.
         * @var string
         */
        public $Name;

        /**
         * The start date.
         * @var \DateTime
         */
        public $StartDate;
    }

}
