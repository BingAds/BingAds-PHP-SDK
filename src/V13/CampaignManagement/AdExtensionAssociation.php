<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the relationship and editorial status of an ad extension with an account, campaign, or ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adextensionassociation?view=bingads-13 AdExtensionAssociation Data Object
     * 
     * @uses AdExtension
     * @uses AssociationType
     * @uses AdExtensionEditorialStatus
     * @used-by AdExtensionAssociationCollection
     */
    final class AdExtensionAssociation
    {
        /**
         * The ad extension associated with a supported entity.
         * @var AdExtension
         */
        public $AdExtension;

        /**
         * The type of entity associated with the ad extension.
         * @var AssociationType
         */
        public $AssociationType;

        /**
         * The editorial status of the ad extension.
         * @var AdExtensionEditorialStatus
         */
        public $EditorialStatus;

        /**
         * The identifier of an entity associated with the ad extension.
         * @var integer
         */
        public $EntityId;
    }

}
