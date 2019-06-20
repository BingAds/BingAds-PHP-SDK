<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that contains association information for a campaign and shared entity such as a negative keyword list.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/sharedentityassociation?view=bingads-13 SharedEntityAssociation Data Object
     * 
     * @used-by DeleteSharedEntityAssociationsRequest
     * @used-by GetSharedEntityAssociationsByEntityIdsResponse
     * @used-by GetSharedEntityAssociationsBySharedEntityIdsResponse
     * @used-by SetSharedEntityAssociationsRequest
     */
    final class SharedEntityAssociation
    {
        /**
         * The system-generated identifier of the campaign that is associated with the shared entity.
         * @var integer
         */
        public $EntityId;

        /**
         * The type of entity.
         * @var string
         */
        public $EntityType;

        /**
         * The system-generated identifier of the shared entity.
         * @var integer
         */
        public $SharedEntityId;

        /**
         * The type of the shared entity.
         * @var string
         */
        public $SharedEntityType;
    }

}
