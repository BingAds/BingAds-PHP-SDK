<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more ads to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277506(v=msads.110).aspx AddAds Response Object
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
