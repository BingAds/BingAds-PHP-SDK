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
         * Determines whether to return mock template data.
         * @var boolean
         */
        public $Mock;

        /**
         * The maximum number of video templates to return.
         * @var integer
         */
        public $MaxAdsCount;

        /**
         * The criteria to use to filter the video templates.
         * @var VideoTemplateFilter
         */
        public $TemplateFilter;

        /**
         * The locale of the video templates to return.
         * @var string
         */
        public $Locale;
    }
}
