<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates one or more ad group criterions.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/updateadgroupcriterions?view=bingads-13 UpdateAdGroupCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupCriterions
     */
    final class UpdateAdGroupCriterionsResponse
    {
        /**
         * An array of BatchErrorCollection objects that contain details for any criterion that were not successfully updated.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }
}
