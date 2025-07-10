<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified new customer acquisition goals.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getnewcustomeracquisitiongoalsbyaccountid?view=bingads-13 GetNewCustomerAcquisitionGoalsByAccountId Response Object
     * 
     * @uses NewCustomerAcquisitionGoal
     * @used-by BingAdsCampaignManagementService::GetNewCustomerAcquisitionGoalsByAccountId
     */
    final class GetNewCustomerAcquisitionGoalsByAccountIdResponse
    {
        /**
         * Reserved.
         * @var NewCustomerAcquisitionGoal[]
         */
        public $NewCustomerAcquisitionGoals;
    }
}
