<?php
// Generated on 6/7/2017 5:54:10 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
     * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.100).aspx GetEditorialReasonsByIds Request Object
     * 
     * @uses EntityIdToParentIdAssociation
     * @uses EntityType
     * @used-by BingAdsCampaignManagementService::GetEditorialReasonsByIds
     */
    final class GetEditorialReasonsByIdsRequest
    {
        /**
         * The identifier of the account that contains the specified entities.
         * @var integer
         */
        public $AccountId;

        /**
         * A list of EntityIdToParentIdAssociation objects that each contain the unique system identifier of an entity such as ad or keyword, and the identifier of its parent.
         * @var EntityIdToParentIdAssociation[]
         */
        public $EntityIdToParentIdAssociations;

        /**
         * The type of entities that the entity list contains.
         * @var EntityType
         */
        public $EntityType;
    }
}
