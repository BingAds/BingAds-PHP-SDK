<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified new customer acquisition goals.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getnewcustomeracquisitiongoalsbyaccountid?view=bingads-13 GetNewCustomerAcquisitionGoalsByAccountId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetNewCustomerAcquisitionGoalsByAccountId
     */
    final class GetNewCustomerAcquisitionGoalsByAccountIdRequest
    {
        /**
         * The Microsoft Advertising identifier of the account whose new customer acquisition goals you want to get.
         * @var integer
         */
        public $AccountId;
    }
}
