<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Gets a list of the pilot programs in which the specified customer participates.
     * @link http://msdn.microsoft.com/en-us/library/dn451285(v=msads.90).aspx GetCustomerPilotFeatures Response Object
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
