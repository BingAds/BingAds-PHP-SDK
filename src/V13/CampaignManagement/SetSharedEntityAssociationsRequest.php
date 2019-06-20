<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Sets the association between a campaign and a negative keyword list.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/setsharedentityassociations?view=bingads-13 SetSharedEntityAssociations Request Object
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
