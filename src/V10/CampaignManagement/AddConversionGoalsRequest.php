<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds new conversion goals to the account's shared conversion goal library.
     * @link http://msdn.microsoft.com/en-us/library/mt759539(v=msads.100).aspx AddConversionGoals Request Object
     * 
     * @uses ConversionGoal
     * @used-by BingAdsCampaignManagementService::AddConversionGoals
     */
    final class AddConversionGoalsRequest
    {
        public $ConversionGoals;
    }
}
