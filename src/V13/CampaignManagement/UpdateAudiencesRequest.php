<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified audiences.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateaudiences?view=bingads-13 UpdateAudiences Request Object
     * 
     * @uses Audience
     * @used-by BingAdsCampaignManagementService::UpdateAudiences
     */
    final class UpdateAudiencesRequest
    {
        /**
         * A list of audiences to update.
         * @var Audience[]
         */
        public $Audiences;
    }
}
