<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/diagnosticcategorydata?view=bingads-13 DiagnosticCategoryData Data Object
     * 
     * @uses HealthCheckActionLinkMetadata
     * @used-by GetDiagnosticsResponse
     */
    final class DiagnosticCategoryData
    {
        /**
         * Reserved.
         * @var HealthCheckActionLinkMetadata[]
         */
        public $ActionLinks;

        /**
         * Reserved.
         * @var string
         */
        public $CategoryDisplayName;

        /**
         * Reserved.
         * @var string
         */
        public $CategoryKey;

        /**
         * Reserved.
         * @var string
         */
        public $CategorySeverity;

        /**
         * Reserved.
         * @var string
         */
        public $CategoryStatus;

        /**
         * Reserved.
         * @var string
         */
        public $Description;
    }

}
