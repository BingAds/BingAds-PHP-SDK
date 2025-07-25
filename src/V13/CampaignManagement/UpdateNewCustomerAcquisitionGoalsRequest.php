<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Update the specificed new customer acquisition goals.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatenewcustomeracquisitiongoals?view=bingads-13 UpdateNewCustomerAcquisitionGoals Request Object
     * 
     * @uses NewCustomerAcquisitionGoal
     * @used-by BingAdsCampaignManagementService::UpdateNewCustomerAcquisitionGoals
     */
    final class UpdateNewCustomerAcquisitionGoalsRequest
    {
        /**
         * Reserved.
         * @var NewCustomerAcquisitionGoal[]
         */
        public $NewCustomerAcquisitionGoals;
    }
}
