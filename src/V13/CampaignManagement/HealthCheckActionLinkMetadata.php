<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the health check action link metadata data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/healthcheckactionlinkmetadata?view=bingads-13 HealthCheckActionLinkMetadata Data Object
     * 
     * @used-by DiagnosticCategoryData
     * @used-by HealthCheckColumnMetadata
     */
    final class HealthCheckActionLinkMetadata
    {
        /**
         * Reserved.
         * @var string
         */
        public $LinkName;

        /**
         * Reserved.
         * @var string
         */
        public $LinkTemplate;

        /**
         * Reserved.
         * @var string
         */
        public $LinkType;
    }

}
