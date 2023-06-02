<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more labels from the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletelabels?view=bingads-13 DeleteLabels Request Object
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
