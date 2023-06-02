<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Appeals ads or keywords that failed editorial review.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/appealeditorialrejections?view=bingads-13 AppealEditorialRejections Request Object
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
