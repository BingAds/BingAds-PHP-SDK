<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Removes the association between a negative keyword list and an entity such as a campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn743727(v=msads.110).aspx DeleteSharedEntityAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
     */
    final class DeleteSharedEntityAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any associations that were not successfully deleted.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
