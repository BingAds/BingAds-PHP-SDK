<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds one or more campaigns to the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.100).aspx AddCampaigns Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddCampaigns
     */
    final class AddCampaignsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the campaigns that were added.
         * @var integer[]
         */
        public $CampaignIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
