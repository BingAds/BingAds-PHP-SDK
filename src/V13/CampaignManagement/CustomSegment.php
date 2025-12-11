<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customsegment?view=bingads-13 CustomSegment Data Object
     * 
     * @uses CustomSegmentCatalog
     * @uses CustomSegmentEditorialStatus
     */
    final class CustomSegment extends Audience
    {
        /**
         * Reserved.
         * @var CustomSegmentCatalog[]
         */
        public $CustomSegmentCatalogList;

        /**
         * Reserved.
         * @var CustomSegmentEditorialStatus
         */
        public $EditorialStatus;
    }

}
