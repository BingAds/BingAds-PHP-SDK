<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Associates the specified ad extensions with the respective campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn277532(v=msads.110).aspx SetAdExtensionsAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetAdExtensionsAssociations
     */
    final class SetAdExtensionsAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
