<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds new conversion goals to the account's shared conversion goal library.
     * @link http://msdn.microsoft.com/en-us/library/mt759539(v=msads.100).aspx AddConversionGoals Response Object
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
