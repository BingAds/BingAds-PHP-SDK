<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Sets the association between a campaign and a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743780(v=msads.110).aspx SetSharedEntityAssociations Request Object
     * 
     * @uses SharedEntityAssociation
     * @used-by BingAdsCampaignManagementService::SetSharedEntityAssociations
     */
    final class SetSharedEntityAssociationsRequest
    {
        /**
         * The list of campaign and negative keyword list associations.
         * @var SharedEntityAssociation[]
         */
        public $Associations;
    }
}
