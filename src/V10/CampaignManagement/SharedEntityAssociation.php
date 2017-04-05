<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines an object that contains association information for a campaign and shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743769(v=msads.100).aspx SharedEntityAssociation Data Object
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
