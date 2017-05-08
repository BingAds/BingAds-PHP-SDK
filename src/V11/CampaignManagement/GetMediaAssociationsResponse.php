<?php
// Generated on 5/7/2017 5:48:21 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the media associations of the specified entity type from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn798359(v=msads.110).aspx GetMediaAssociations Response Object
     * 
     * @uses MediaAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetMediaAssociations
     */
    final class GetMediaAssociationsResponse
    {
        public $MediaAssociations;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
