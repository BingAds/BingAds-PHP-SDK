<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Update the specificed new customer acquisition goals.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatenewcustomeracquisitiongoals?view=bingads-13 UpdateNewCustomerAcquisitionGoals Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateNewCustomerAcquisitionGoals
     */
    final class UpdateNewCustomerAcquisitionGoalsResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
