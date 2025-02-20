<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a data object for PlacementCriterion.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/placementcriterion?view=bingads-13 PlacementCriterion Data Object
     */
    final class PlacementCriterion extends Criterion
    {
        /**
         * The ID of the placement.
         * @var integer
         */
        public $PlacementId;

        /**
         * The name of the placement.
         * @var string
         */
        public $PlacementName;
    }

}
