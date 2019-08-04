<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of the pilot programs that are enabled for all of the customer's accounts.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getcustomerpilotfeatures?view=bingads-13 GetCustomerPilotFeatures Response Object
     * 
     * @used-by BingAdsCustomerManagementService::GetCustomerPilotFeatures
     */
    final class GetCustomerPilotFeaturesResponse
    {
        /**
         * A list of integers that identifies the pilot features that are enabled for all of the customer's accounts.
         * @var integer[]
         */
        public $FeaturePilotFlags;
    }
}
