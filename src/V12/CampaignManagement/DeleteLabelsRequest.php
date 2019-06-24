<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Deletes one or more labels from the account.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/deletelabels?view=bingads-12 DeleteLabels Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteLabels
     */
    final class DeleteLabelsRequest
    {
        /**
         * The identifiers of labels to delete.
         * @var integer[]
         */
        public $LabelIds;
    }
}
