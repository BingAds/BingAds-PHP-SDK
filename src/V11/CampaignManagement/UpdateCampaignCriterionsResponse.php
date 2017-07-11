<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates one or more campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913121(v=msads.110).aspx UpdateCampaignCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
     */
    final class UpdateCampaignCriterionsResponse
    {
        /**
         * Indicates whether or not the campaign where you updated target criterions previously shared target criterions with another campaign or ad group.
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
