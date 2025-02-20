<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the ApplyCustomerListUserData service operation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/applycustomerlistuserdata?view=bingads-13 ApplyCustomerListUserData Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::ApplyCustomerListUserData
     */
    final class ApplyCustomerListUserDataResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that weren't successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
