<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/healthcheckmetadata?view=bingads-13 HealthCheckMetadata Data Object
     * 
     * @uses HealthCheckActionLinkMetadata
     * @uses HealthCheckColumnMetadata
     * @used-by GetHealthCheckResponse
     */
    final class HealthCheckMetadata
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
        public $HealthCheckCategory;

        /**
         * Reserved.
         * @var string
         */
        public $HealthCheckCategoryDisplayName;

        /**
         * Reserved.
         * @var HealthCheckColumnMetadata[]
         */
        public $HealthCheckColumnsMetadata;

        /**
         * Reserved.
         * @var string
         */
        public $HealthCheckDescription;

        /**
         * Reserved.
         * @var string
         */
        public $HealthCheckDisplayName;

        /**
         * Reserved.
         * @var string
         */
        public $HealthCheckHelpTooltip;

        /**
         * Reserved.
         * @var string
         */
        public $HealthCheckName;

        /**
         * Reserved.
         * @var string
         */
        public $HealthCheckSeverity;

        /**
         * Reserved.
         * @var string
         */
        public $HealthCheckSubType;
    }

}
