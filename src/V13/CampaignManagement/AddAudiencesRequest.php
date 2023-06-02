<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more audiences.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addaudiences?view=bingads-13 AddAudiences Request Object
     * 
     * @uses Audience
     * @used-by BingAdsCampaignManagementService::AddAudiences
     */
    final class AddAudiencesRequest
    {
        /**
         * The list of audiences to add.
         * @var Audience[]
         */
        public $Audiences;
    }
}
