<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds new campaign conversion goals to the account's shared campaign conversion goal library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addcampaignconversiongoals?view=bingads-13 AddCampaignConversionGoals Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddCampaignConversionGoals
     */
    final class AddCampaignConversionGoalsResponse
    {
        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
