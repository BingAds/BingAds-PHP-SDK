<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/dn277533(v=msads.110).aspx AppealEditorialRejections Request Object
     * 
     * @uses EntityIdToParentIdAssociation
     * @uses EntityType
     * @used-by BingAdsCampaignManagementService::AppealEditorialRejections
     */
    final class AppealEditorialRejectionsRequest
    {
        /**
         * A list of unique identifiers of the ads or keywords that failed editorial review.
         * @var EntityIdToParentIdAssociation[]
         */
        public $EntityIdToParentIdAssociations;

        /**
         * The type of entity that the entity to parent list contains.
         * @var EntityType
         */
        public $EntityType;

        /**
         * The justification for the appeal.
         * @var string
         */
        public $JustificationText;
    }
}
