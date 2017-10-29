<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets a list of the pilot programs in which the specified customer participates.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/getcustomerpilotfeatures?version=11 GetCustomerPilotFeatures Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetCustomerPilotFeatures
     */
    final class GetCustomerPilotFeaturesRequest
    {
        /**
         * The identifier of the customer whose list of pilot programs you want to get.
         * @var integer
         */
        public $CustomerId;
    }
}
