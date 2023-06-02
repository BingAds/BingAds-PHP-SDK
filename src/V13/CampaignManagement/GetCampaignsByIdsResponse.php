<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified campaigns within an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getcampaignsbyids?view=bingads-13 GetCampaignsByIds Response Object
     * 
     * @uses Campaign
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetCampaignsByIds
     */
    final class GetCampaignsByIdsResponse
    {
        /**
         * An array of Campaign objects that corresponds directly to the campaign identifiers that you specified in the request.
         * @var Campaign[]
         */
        public $Campaigns;

        /**
         * An array of BatchError objects that contain details for any campaigns that were not successfully retrieved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
