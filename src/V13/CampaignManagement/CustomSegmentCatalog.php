<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customsegmentcatalog?view=bingads-13 CustomSegmentCatalog Data Object
     * 
     * @uses EffectiveEditorialStatus
     * @used-by CustomSegment
     */
    final class CustomSegmentCatalog
    {
        /**
         * Reserved.
         * @var integer
         */
        public $CatalogId;

        /**
         * Reserved.
         * @var string
         */
        public $CatalogName;

        /**
         * Reserved.
         * @var EffectiveEditorialStatus
         */
        public $EffectiveEditorialStatus;
    }

}
