<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of the pilot programs in which the specified customer participates.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/getcustomerpilotfeatures?view=bingads-13 GetCustomerPilotFeatures Response Object
     * 
     * @used-by BingAdsCustomerManagementService::GetCustomerPilotFeatures
     */
    final class GetCustomerPilotFeaturesResponse
    {
        /**
         * A list of integers that identifies the pilot programs in which the customer participates.
         * @var integer[]
         */
        public $FeaturePilotFlags;
    }
}
