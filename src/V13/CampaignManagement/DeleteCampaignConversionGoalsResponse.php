<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes a campaign conversion goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletecampaignconversiongoals?view=bingads-13 DeleteCampaignConversionGoals Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteCampaignConversionGoals
     */
    final class DeleteCampaignConversionGoalsResponse
    {
        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
