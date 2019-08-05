<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of the pilot programs that are enabled for all of the customer's accounts.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/getcustomerpilotfeatures?view=bingads-13 GetCustomerPilotFeatures Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetCustomerPilotFeatures
     */
    final class GetCustomerPilotFeaturesRequest
    {
        /**
         * The identifier of the customer used to get a list of pilot features.
         * @var integer
         */
        public $CustomerId;
    }
}
