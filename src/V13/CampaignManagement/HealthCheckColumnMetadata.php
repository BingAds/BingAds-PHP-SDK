<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the health check column metadata data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/healthcheckcolumnmetadata?view=bingads-13 HealthCheckColumnMetadata Data Object
     * 
     * @uses HealthCheckActionLinkMetadata
     * @used-by HealthCheckMetadata
     */
    final class HealthCheckColumnMetadata
    {
        /**
         * Reserved.
         * @var HealthCheckActionLinkMetadata[]
         */
        public $HealthCheckActionLinksMetadata;

        /**
         * Reserved.
         * @var string
         */
        public $Key;

        /**
         * Reserved.
         * @var string
         */
        public $Title;

        /**
         * Reserved.
         * @var string
         */
        public $Type;
    }

}
