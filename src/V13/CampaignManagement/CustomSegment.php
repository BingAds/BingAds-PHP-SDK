<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the CustomSegment data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customsegment?view=bingads-13 CustomSegment Data Object
     * 
     * @uses CustomSegmentCatalog
     * @uses CustomSegmentEditorialStatus
     */
    final class CustomSegment extends Audience
    {
        /**
         * A list of custom segment catalogs.
         * @var CustomSegmentCatalog[]
         */
        public $CustomSegmentCatalogList;

        /**
         * The custom segment editorial status.
         * @var CustomSegmentEditorialStatus
         */
        public $EditorialStatus;
    }

}
