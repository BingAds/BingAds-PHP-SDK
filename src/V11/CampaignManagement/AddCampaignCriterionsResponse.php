<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more campaign criterions that help determine whether ads in each campaign get served.
     * @link http://msdn.microsoft.com/en-us/library/dn913127(v=msads.110).aspx AddCampaignCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::AddCampaignCriterions
     */
    final class AddCampaignCriterionsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the criterion that were added.
         * @var integer[]
         */
        public $CampaignCriterionIds;

        /**
         * Indicates whether or not the campaign where you added target criterions previously shared target criterions with another campaign or ad group.
         * @var boolean
         */
        public $IsMigrated;

        /**
         * An array of BatchErrorCollection objects that contain details for any criterion that were not successfully added.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }
}
