<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more campaigns to the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addcampaigns?view=bingads-13 AddCampaigns Response Object
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
