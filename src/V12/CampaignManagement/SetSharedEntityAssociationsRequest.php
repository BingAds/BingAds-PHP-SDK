<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Sets the association between a campaign and a negative keyword list.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/setsharedentityassociations?view=bingads-12 SetSharedEntityAssociations Request Object
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
