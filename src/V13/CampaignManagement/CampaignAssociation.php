<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a data object for which campaigns to associate to data exclusions and seasonality adjustments.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/campaignassociation?view=bingads-13 CampaignAssociation Data Object
     * 
     * @used-by DataExclusion
     * @used-by SeasonalityAdjustment
     */
    final class CampaignAssociation
    {
        /**
         * The campaign ID.
         * @var integer
         */
        public $CampaignId;
    }

}
