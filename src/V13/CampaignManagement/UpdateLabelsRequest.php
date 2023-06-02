<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the labels within the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatelabels?view=bingads-13 UpdateLabels Request Object
     * 
     * @uses Label
     * @used-by BingAdsCampaignManagementService::UpdateLabels
     */
    final class UpdateLabelsRequest
    {
        /**
         * The list of labels that you want to update.
         * @var Label[]
         */
        public $Labels;
    }
}
