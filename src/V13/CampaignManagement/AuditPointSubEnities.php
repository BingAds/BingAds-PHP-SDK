<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/auditpointsubenities?view=bingads-13 AuditPointSubEnities Data Object
     * 
     * @used-by AuditPointResult
     */
    final class AuditPointSubEnities
    {
        /**
         * Reserved.
         * @var integer
         */
        public $IssueCount;

        /**
         * Reserved.
         * @var integer[]
         */
        public $SubEntitiesIds;

        /**
         * Reserved.
         * @var string
         */
        public $SubEntitiesType;
    }

}
