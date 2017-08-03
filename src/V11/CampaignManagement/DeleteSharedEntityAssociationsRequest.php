<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Removes the association between a negative keyword list and an entity such as a campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn743727(v=msads.110).aspx DeleteSharedEntityAssociations Request Object
     * 
     * @uses SharedEntityAssociation
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
     */
    final class DeleteSharedEntityAssociationsRequest
    {
        /**
         * An array of objects that associate a negative keyword list and an entity such as a campaign.
         * @var SharedEntityAssociation[]
         */
        public $Associations;
    }
}
