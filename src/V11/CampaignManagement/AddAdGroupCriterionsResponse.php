<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn277499(v=msads.110).aspx AddAdGroupCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::AddAdGroupCriterions
     */
    final class AddAdGroupCriterionsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the criterion that were added.
         * @var integer[]
         */
        public $AdGroupCriterionIds;

        /**
         * Indicates whether or not the ad group where you added target criterions previously shared target criterions with another campaign or ad group.
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
