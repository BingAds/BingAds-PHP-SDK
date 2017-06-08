<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds new ad groups to a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277502(v=msads.100).aspx AddAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAdGroups
     */
    final class AddAdGroupsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the ad groups that were added.
         * @var integer[]
         */
        public $AdGroupIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
