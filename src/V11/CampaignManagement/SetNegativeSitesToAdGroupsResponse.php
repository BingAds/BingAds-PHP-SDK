<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Sets the negative site URLs of the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236317(v=msads.110).aspx SetNegativeSitesToAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToAdGroups
     */
    final class SetNegativeSitesToAdGroupsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
