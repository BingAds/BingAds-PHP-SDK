<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the CustomSegmentCatalog data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customsegmentcatalog?view=bingads-13 CustomSegmentCatalog Data Object
     * 
     * @uses EffectiveEditorialStatus
     * @used-by CustomSegment
     */
    final class CustomSegmentCatalog
    {
        /**
         * The catalog ID.
         * @var integer
         */
        public $CatalogId;

        /**
         * The catalog name.
         * @var string
         */
        public $CatalogName;

        /**
         * The effective editorial status.
         * @var EffectiveEditorialStatus
         */
        public $EffectiveEditorialStatus;
    }

}
