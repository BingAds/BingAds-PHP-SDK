<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Sets the negative keyword list to campaign associations, or website exclusion list to ad account associations.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/setsharedentityassociations?view=bingads-13 SetSharedEntityAssociations Request Object
     * 
     * @uses SharedEntityAssociation
     * @uses EntityScope
     * @used-by BingAdsCampaignManagementService::SetSharedEntityAssociations
     */
    final class SetSharedEntityAssociationsRequest
    {
        /**
         * The list of negative keyword list to campaign associations, or website exclusion list to ad account associations.
         * @var SharedEntityAssociation[]
         */
        public $Associations;

        /**
         * Indicates whether the shared entity is available at the ad account (Account) or manager account (Customer) level.
         * @var EntityScope
         */
        public $SharedEntityScope;
    }
}
