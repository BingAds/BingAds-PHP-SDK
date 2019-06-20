<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Deletes the specified ad group criterions.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/deleteadgroupcriterions?view=bingads-12 DeleteAdGroupCriterions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupCriterions
     */
    final class DeleteAdGroupCriterionsResponse
    {
        /**
         * Indicates whether or not the ad group where you deleted target criterions previously shared target criterions with another campaign or ad group.
         * @var boolean
         */
        public $IsMigrated;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
