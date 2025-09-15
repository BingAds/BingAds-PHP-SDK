<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/auditpointtemplate?view=bingads-13 AuditPointTemplate Data Object
     * 
     * @uses AuditPointLink
     * @used-by AuditPointResult
     */
    final class AuditPointTemplate
    {
        /**
         * Reserved.
         * @var string
         */
        public $Description;

        /**
         * Reserved.
         * @var string
         */
        public $Headline;

        /**
         * Reserved.
         * @var AuditPointLink[]
         */
        public $Links;

        /**
         * Reserved.
         * @var string
         */
        public $Title;
    }

}
