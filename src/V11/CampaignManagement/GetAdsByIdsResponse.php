<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the specified ads from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236296(v=msads.110).aspx GetAdsByIds Response Object
     * 
     * @uses Ad
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdsByIds
     */
    final class GetAdsByIdsResponse
    {
        /**
         * An array of Ad objects that corresponds directly to the ad identifiers that you specified in the request.
         * @var Ad[]
         */
        public $Ads;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
