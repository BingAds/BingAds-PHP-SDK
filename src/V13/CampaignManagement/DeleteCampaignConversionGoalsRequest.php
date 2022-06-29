<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes a campaign conversion goal.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/deletecampaignconversiongoals?view=bingads-13 DeleteCampaignConversionGoals Request Object
     * 
     * @uses CampaignConversionGoal
     * @used-by BingAdsCampaignManagementService::DeleteCampaignConversionGoals
     */
    final class DeleteCampaignConversionGoalsRequest
    {
        /**
         * Reserved.
         * @var CampaignConversionGoal[]
         */
        public $CampaignConversionGoal;
    }
}
