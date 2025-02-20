<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addnewcustomeracquisitiongoals?view=bingads-13 AddNewCustomerAcquisitionGoals Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddNewCustomerAcquisitionGoals
     */
    final class AddNewCustomerAcquisitionGoalsResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $NewCustomerAcquisitionGoalIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
