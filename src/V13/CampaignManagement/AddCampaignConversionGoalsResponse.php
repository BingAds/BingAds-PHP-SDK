<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds new campaign conversion goals to the account's shared campaign conversion goal library.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addcampaignconversiongoals?view=bingads-13 AddCampaignConversionGoals Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddCampaignConversionGoals
     */
    final class AddCampaignConversionGoalsResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
