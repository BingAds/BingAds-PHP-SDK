<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Sets the association between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743780(v=msads.100).aspx SetSharedEntityAssociations Request Object
     * 
     * @uses SharedEntityAssociation
     * @used-by BingAdsCampaignManagementService::SetSharedEntityAssociations
     */
    final class SetSharedEntityAssociationsRequest
    {
        /**
         * An array of objects that associate a campaign with a shared entity such as a negative keyword list.
         * @var SharedEntityAssociation[]
         */
        public $Associations;
    }
}
