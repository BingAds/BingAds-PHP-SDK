<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Gets a list of the feature pilot IDs that are enabled for all ad accounts owned by a customer (manager account).
     * @link https:/learn.microsoft.com/advertising/customer-management-service/getcustomerpilotfeatures?view=bingads-13 GetCustomerPilotFeatures Response Object
     * 
     * @used-by BingAdsCustomerManagementService::GetCustomerPilotFeatures
     */
    final class GetCustomerPilotFeaturesResponse
    {
        /**
         * A list of integers that identify the feature pilots that are enabled for all accounts owned by a customer (manager account).
         * @var integer[]
         */
        public $FeaturePilotFlags;
    }
}
