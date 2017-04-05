<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Sets the association between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743780(v=msads.100).aspx SetSharedEntityAssociations Response Object
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
