<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the labels within the account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updatelabels?version=11 UpdateLabels Request Object
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
