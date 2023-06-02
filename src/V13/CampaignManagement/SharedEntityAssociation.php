<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that associates a campaign to negative keyword list, or an ad account to a website exclusion list.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/sharedentityassociation?view=bingads-13 SharedEntityAssociation Data Object
     * 
     * @used-by DeleteSharedEntityAssociationsRequest
     * @used-by GetSharedEntityAssociationsByEntityIdsResponse
     * @used-by GetSharedEntityAssociationsBySharedEntityIdsResponse
     * @used-by SetSharedEntityAssociationsRequest
     */
    final class SharedEntityAssociation
    {
        /**
         * The identifier of the campaign or ad account (according to EntityType) that is associated with the shared entity.
         * @var integer
         */
        public $EntityId;

        /**
         * The type of entity.
         * @var string
         */
        public $EntityType;

        /**
         * Determines the owner of a website exclusion list.
         * @var integer
         */
        public $SharedEntityCustomerId;

        /**
         * The identifier of the shared entity.
         * @var integer
         */
        public $SharedEntityId;

        /**
         * The type of shared entity.
         * @var string
         */
        public $SharedEntityType;
    }

}
