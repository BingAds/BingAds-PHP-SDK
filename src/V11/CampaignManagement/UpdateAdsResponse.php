<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the specified ads within an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.110).aspx UpdateAds Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAds
     */
    final class UpdateAdsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
