<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that contains the unique system identifier of an entity such as ad or keyword, and the identifier of its parent.
     * @link http://msdn.microsoft.com/en-us/library/mt179358(v=msads.110).aspx EntityIdToParentIdAssociation Data Object
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
