<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base object of a campaign conversion goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/campaignconversiongoal?view=bingads-13 CampaignConversionGoal Data Object
     * 
     * @used-by AddCampaignConversionGoalsRequest
     * @used-by DeleteCampaignConversionGoalsRequest
     */
    final class CampaignConversionGoal
    {
        /**
         * The Microsoft Advertising assigned identifier of a campaign.
         * @var integer
         */
        public $CampaignId;

        /**
         * The Microsoft Advertising assigned identifier of a conversion goal.
         * @var integer
         */
        public $GoalId;
    }

}
