<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more labels to an account.
     * @link http://msdn.microsoft.com/en-us/library/mt803285(v=msads.110).aspx AddLabels Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddLabels
     */
    final class AddLabelsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the labels that were added.
         * @var integer[]
         */
        public $LabelIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
