<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Updates the specified audiences.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updateaudiences?view=bingads-12 UpdateAudiences Request Object
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
