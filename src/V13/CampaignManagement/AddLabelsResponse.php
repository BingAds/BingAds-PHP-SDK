<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more labels to an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addlabels?view=bingads-13 AddLabels Response Object
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
