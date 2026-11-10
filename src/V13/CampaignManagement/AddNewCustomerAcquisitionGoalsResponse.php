<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds new customer acquisition goals to the account's shared conversion goal library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addnewcustomeracquisitiongoals?view=bingads-13 AddNewCustomerAcquisitionGoals Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddNewCustomerAcquisitionGoals
     */
    final class AddNewCustomerAcquisitionGoalsResponse
    {
        /**
         * The Microsoft Advertising identifiers of the new customer acquisition goals that were added.
         * @var integer[]
         */
        public $NewCustomerAcquisitionGoalIds;

        /**
         * An array of batch errors that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
