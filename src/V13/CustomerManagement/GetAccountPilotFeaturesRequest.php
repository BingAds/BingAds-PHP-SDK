<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of the pilot programs that are enabled for the specified account.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getaccountpilotfeatures?view=bingads-13 GetAccountPilotFeatures Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetAccountPilotFeatures
     */
    final class GetAccountPilotFeaturesRequest
    {
        /**
         * The identifier of the account used to get a list of pilot features.
         * @var integer
         */
        public $AccountId;
    }
}
