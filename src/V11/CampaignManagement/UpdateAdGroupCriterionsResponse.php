<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates one or more ad group criterions.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updateadgroupcriterions?view=bingads-11 UpdateAdGroupCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupCriterions
     */
    final class UpdateAdGroupCriterionsResponse
    {
        /**
         * Indicates whether or not the ad group where you updated target criterions previously shared target criterions with another campaign or ad group.
         * @var boolean
         */
        public $IsMigrated;

        /**
         * An array of BatchErrorCollection objects that contain details for any criterion that were not successfully updated.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }
}
