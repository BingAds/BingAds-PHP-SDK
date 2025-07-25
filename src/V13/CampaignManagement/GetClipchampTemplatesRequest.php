<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified clip champ templates.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getclipchamptemplates?view=bingads-13 GetClipchampTemplates Request Object
     * 
     * @uses VideoTemplateFilter
     * @used-by BingAdsCampaignManagementService::GetClipchampTemplates
     */
    final class GetClipchampTemplatesRequest
    {
        /**
         * Reserved.
         * @var boolean
         */
        public $Mock;

        /**
         * Reserved.
         * @var integer
         */
        public $MaxAdsCount;

        /**
         * Reserved.
         * @var VideoTemplateFilter
         */
        public $TemplateFilter;

        /**
         * Reserved.
         * @var string
         */
        public $Locale;
    }
}
