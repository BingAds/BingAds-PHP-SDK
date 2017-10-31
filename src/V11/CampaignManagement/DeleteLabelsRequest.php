<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes one or more labels from the account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deletelabels?view=bingads-11 DeleteLabels Request Object
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
