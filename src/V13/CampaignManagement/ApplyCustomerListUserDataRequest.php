<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the ApplyCustomerListUserData service operation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/applycustomerlistuserdata?view=bingads-13 ApplyCustomerListUserData Request Object
     * 
     * @uses CustomerListUserData
     * @used-by BingAdsCampaignManagementService::ApplyCustomerListUserData
     */
    final class ApplyCustomerListUserDataRequest
    {
        /**
         * Defines the CustomerListUserData data object.
         * @var CustomerListUserData
         */
        public $CustomerListUserData;
    }
}
