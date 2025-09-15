<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/categoryresult?view=bingads-13 CategoryResult Data Object
     * 
     * @uses AuditPointResult
     * @uses CategoryTemplate
     * @used-by EntityResult
     */
    final class CategoryResult
    {
        /**
         * Reserved.
         * @var AuditPointResult[]
         */
        public $AuditPoints;

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
         * @var CategoryTemplate
         */
        public $Template;
    }

}
