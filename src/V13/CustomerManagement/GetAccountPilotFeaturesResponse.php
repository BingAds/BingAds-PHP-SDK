<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of the feature pilot IDs that are enabled for an ad account.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/getaccountpilotfeatures?view=bingads-13 GetAccountPilotFeatures Response Object
     * 
     * @used-by BingAdsCustomerManagementService::GetAccountPilotFeatures
     */
    final class GetAccountPilotFeaturesResponse
    {
        /**
         * A list of integers that identify the feature pilots that are enabled for the ad account.
         * @var integer[]
         */
        public $FeaturePilotFlags;
    }
}
