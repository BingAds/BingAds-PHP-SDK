<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/auditpointdetails?view=bingads-13 AuditPointDetails Data Object
     * 
     * @uses AuditPointJsonColumn
     * @used-by AuditPointResult
     */
    final class AuditPointDetails
    {
        /**
         * Reserved.
         * @var AuditPointJsonColumn[]
         */
        public $JsonColumns;

        /**
         * Reserved.
         * @var string
         */
        public $JsonString;
    }

}
