<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes the specified ad group criterions.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/deleteadgroupcriterions?view=bingads-13 DeleteAdGroupCriterions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupCriterions
     */
    final class DeleteAdGroupCriterionsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
