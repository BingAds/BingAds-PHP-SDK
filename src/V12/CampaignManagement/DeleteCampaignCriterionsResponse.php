<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Deletes one or more campaign criterions.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/deletecampaigncriterions?view=bingads-12 DeleteCampaignCriterions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteCampaignCriterions
     */
    final class DeleteCampaignCriterionsResponse
    {
        /**
         * Indicates whether or not the campaign where you deleted target criterions previously shared target criterions with another campaign or ad group.
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
