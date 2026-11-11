<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the CategoryResult data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/categoryresult?view=bingads-13 CategoryResult Data Object
     * 
     * @uses AuditPointResult
     * @used-by EntityResult
     */
    final class CategoryResult
    {
        /**
         * The audit point results in the category.
         * @var AuditPointResult[]
         */
        public $AuditPoints;

        /**
         * The key that identifies the category.
         * @var string
         */
        public $Key;
    }

}
