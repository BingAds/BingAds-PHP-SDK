<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/auditpointresult?view=bingads-13 AuditPointResult Data Object
     * 
     * @used-by CategoryResult
     */
    final class AuditPointResult
    {
        /**
         * Reserved.
         * @var string
         */
        public $Description;

        /**
         * Reserved.
         * @var ArrayOfKeyValueOfstringstring
         */
        public $Details;

        /**
         * Reserved.
         * @var string
         */
        public $Key;

        /**
         * Reserved.
         * @var string
         */
        public $Severity;
    }

}
