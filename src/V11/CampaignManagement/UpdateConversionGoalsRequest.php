<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates conversion goals within the account's shared conversion goal library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updateconversiongoals?view=bingads-11 UpdateConversionGoals Request Object
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
