<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the health check action link metadata data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/healthcheckactionlinkmetadata?view=bingads-13 HealthCheckActionLinkMetadata Data Object
     * 
     * @used-by HealthCheckColumnMetadata
     */
    final class HealthCheckActionLinkMetadata
    {
        /**
         * The display name of the action link.
         * @var string
         */
        public $LinkName;

        /**
         * The template used to construct the action link.
         * @var string
         */
        public $LinkTemplate;

        /**
         * The type of action link.
         * @var string
         */
        public $LinkType;
    }

}
