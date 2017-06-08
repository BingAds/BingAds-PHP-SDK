<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/dn277533(v=msads.100).aspx AppealEditorialRejections Request Object
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
