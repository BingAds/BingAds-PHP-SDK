<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more audiences.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addaudiences?view=bingads-11 AddAudiences Request Object
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
