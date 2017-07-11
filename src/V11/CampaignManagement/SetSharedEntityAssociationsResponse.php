<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Sets the association between a campaign and a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743780(v=msads.110).aspx SetSharedEntityAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetSharedEntityAssociations
     */
    final class SetSharedEntityAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
