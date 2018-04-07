<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an object that contains the unique system identifier of an entity such as ad or keyword, and the identifier of its parent.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/entityidtoparentidassociation?view=bingads-12 EntityIdToParentIdAssociation Data Object
     * 
     * @used-by AppealEditorialRejectionsRequest
     * @used-by GetEditorialReasonsByIdsRequest
     */
    final class EntityIdToParentIdAssociation
    {
        /**
         * The system-generated unique identifier of an entity such as ad or keyword.
         * @var integer
         */
        public $EntityId;

        /**
         * The identifier of the entity's parent.
         * @var integer
         */
        public $ParentId;
    }

}
