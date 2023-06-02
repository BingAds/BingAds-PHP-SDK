<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates conversion goals within the account's shared conversion goal library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateconversiongoals?view=bingads-13 UpdateConversionGoals Request Object
     * 
     * @uses ConversionGoal
     * @used-by BingAdsCampaignManagementService::UpdateConversionGoals
     */
    final class UpdateConversionGoalsRequest
    {
        /**
         * An array of ConversionGoal objects to update within the account's shared conversion goal library.
         * @var ConversionGoal[]
         */
        public $ConversionGoals;
    }
}
