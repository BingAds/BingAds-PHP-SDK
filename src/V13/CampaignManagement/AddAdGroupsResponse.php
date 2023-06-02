<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds new ad groups to a specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addadgroups?view=bingads-13 AddAdGroups Response Object
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
         * Reserved for future use.
         * @var string[]
         */
        public $InheritedBidStrategyTypes;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
