<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base object of a campaign conversion goal.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/campaignconversiongoal?view=bingads-13 CampaignConversionGoal Data Object
     * 
     * @used-by AddCampaignConversionGoalsRequest
     * @used-by DeleteCampaignConversionGoalsRequest
     */
    final class CampaignConversionGoal
    {
        /**
         * Reserved.
         * @var integer
         */
        public $CampaignId;

        /**
         * Reserved.
         * @var integer
         */
        public $GoalId;
    }

}
