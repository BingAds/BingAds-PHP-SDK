<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Removes the specified association from the respective campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236305(v=msads.110).aspx DeleteAdExtensionsAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensionsAssociations
     */
    final class DeleteAdExtensionsAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
