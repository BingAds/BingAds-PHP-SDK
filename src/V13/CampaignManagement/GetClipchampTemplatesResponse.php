<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified clip champ templates.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getclipchamptemplates?view=bingads-13 GetClipchampTemplates Response Object
     * 
     * @uses ClipchampTemplateInfo
     * @used-by BingAdsCampaignManagementService::GetClipchampTemplates
     */
    final class GetClipchampTemplatesResponse
    {
        /**
         * Reserved.
         * @var ClipchampTemplateInfo[]
         */
        public $Templates;
    }
}
