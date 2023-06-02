<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds new conversion goals to the account's shared conversion goal library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addconversiongoals?view=bingads-13 AddConversionGoals Request Object
     * 
     * @uses ConversionGoal
     * @used-by BingAdsCampaignManagementService::AddConversionGoals
     */
    final class AddConversionGoalsRequest
    {
        /**
         * The list of conversion goals to add to the account's shared conversion goal library.
         * @var ConversionGoal[]
         */
        public $ConversionGoals;
    }
}
