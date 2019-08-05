<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of the pilot programs that are enabled for the specified account.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getaccountpilotfeatures?view=bingads-13 GetAccountPilotFeatures Response Object
     * 
     * @used-by BingAdsCustomerManagementService::GetAccountPilotFeatures
     */
    final class GetAccountPilotFeaturesResponse
    {
        /**
         * A list of integers that identifies the pilot features that are enabled for all of the customer's accounts.
         * @var integer[]
         */
        public $FeaturePilotFlags;
    }
}
