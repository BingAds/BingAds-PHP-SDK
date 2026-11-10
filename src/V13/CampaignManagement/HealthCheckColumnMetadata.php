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
         * The metadata for action links associated with the health check column.
         * @var HealthCheckActionLinkMetadata[]
         */
        public $HealthCheckActionLinksMetadata;

        /**
         * The key that identifies the health check column.
         * @var string
         */
        public $Key;

        /**
         * The display title of the health check column.
         * @var string
         */
        public $Title;

        /**
         * The data type of the health check column.
         * @var string
         */
        public $Type;
    }

}
