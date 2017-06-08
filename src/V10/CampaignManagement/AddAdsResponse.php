<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds one or more ads to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277506(v=msads.100).aspx AddAds Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAds
     */
    final class AddAdsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the ads that were added.
         * @var integer[]
         */
        public $AdIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
