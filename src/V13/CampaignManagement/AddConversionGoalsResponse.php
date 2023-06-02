<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds new conversion goals to the account's shared conversion goal library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addconversiongoals?view=bingads-13 AddConversionGoals Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddConversionGoals
     */
    final class AddConversionGoalsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the conversion goals that were added.
         * @var integer[]
         */
        public $ConversionGoalIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
