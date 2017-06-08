<?php
// Generated on 6/7/2017 5:55:37 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the relationship and editorial status of an ad extension with an account, campaign, or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn250012(v=msads.110).aspx AdExtensionAssociation Data Object
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
