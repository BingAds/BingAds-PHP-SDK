<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of the feature pilot IDs that are enabled for all ad accounts owned by a customer (manager account).
     * @link https:/learn.microsoft.com/advertising/customer-management-service/getcustomerpilotfeatures?view=bingads-13 GetCustomerPilotFeatures Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetCustomerPilotFeatures
     */
    final class GetCustomerPilotFeaturesRequest
    {
        /**
         * The identifier of the customer used to get a list of feature pilot IDs.
         * @var integer
         */
        public $CustomerId;
    }
}
