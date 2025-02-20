<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes a campaign conversion goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletecampaignconversiongoals?view=bingads-13 DeleteCampaignConversionGoals Request Object
     * 
     * @uses CampaignConversionGoal
     * @used-by BingAdsCampaignManagementService::DeleteCampaignConversionGoals
     */
    final class DeleteCampaignConversionGoalsRequest
    {
        /**
         * An array of the base object of a campaign conversion goal.
         * @var CampaignConversionGoal[]
         */
        public $CampaignConversionGoal;
    }
}
