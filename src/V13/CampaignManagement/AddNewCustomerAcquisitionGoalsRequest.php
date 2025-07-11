<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds new customer acquisition goals to the account's shared conversion goal library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addnewcustomeracquisitiongoals?view=bingads-13 AddNewCustomerAcquisitionGoals Request Object
     * 
     * @uses NewCustomerAcquisitionGoal
     * @used-by BingAdsCampaignManagementService::AddNewCustomerAcquisitionGoals
     */
    final class AddNewCustomerAcquisitionGoalsRequest
    {
        /**
         * Reserved.
         * @var NewCustomerAcquisitionGoal[]
         */
        public $NewCustomerAcquisitionGoals;
    }
}
