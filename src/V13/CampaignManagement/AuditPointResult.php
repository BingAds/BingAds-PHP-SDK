<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the AuditPointResult data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/auditpointresult?view=bingads-13 AuditPointResult Data Object
     * 
     * @used-by CategoryResult
     */
    final class AuditPointResult
    {
        /**
         * The audit point description.
         * @var string
         */
        public $Description;

        /**
         * Additional key and value details about the audit point.
         * @var ArrayOfKeyValueOfstringstring
         */
        public $Details;

        /**
         * The key that identifies the audit point.
         * @var string
         */
        public $Key;

        /**
         * The severity of the audit point result.
         * @var string
         */
        public $Severity;

        /**
         * The timestamp of the audit point result.
         * @var string
         */
        public $Timestamp;
    }

}
