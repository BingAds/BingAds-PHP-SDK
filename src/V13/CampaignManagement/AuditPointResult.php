<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/auditpointresult?view=bingads-13 AuditPointResult Data Object
     * 
     * @uses AuditPointDetails
     * @uses OperationError
     * @uses AuditPointSubEnities
     * @uses AuditPointTemplate
     * @used-by CategoryResult
     */
    final class AuditPointResult
    {
        /**
         * Reserved.
         * @var AuditPointDetails
         */
        public $Details;

        /**
         * Reserved.
         * @var OperationError[]
         */
        public $Errors;

        /**
         * Reserved.
         * @var string
         */
        public $Key;

        /**
         * Reserved.
         * @var integer
         */
        public $Ranking;

        /**
         * Reserved.
         * @var string
         */
        public $Severity;

        /**
         * Reserved.
         * @var string
         */
        public $Status;

        /**
         * Reserved.
         * @var AuditPointSubEnities
         */
        public $SubEntities;

        /**
         * Reserved.
         * @var AuditPointTemplate
         */
        public $Template;

        /**
         * Reserved.
         * @var string
         */
        public $Timestamp;
    }

}
