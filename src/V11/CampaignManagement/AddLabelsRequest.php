<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more labels to an account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addlabels?version=11 AddLabels Request Object
     * 
     * @uses Label
     * @used-by BingAdsCampaignManagementService::AddLabels
     */
    final class AddLabelsRequest
    {
        /**
         * The list of labels to add to the account.
         * @var Label[]
         */
        public $Labels;
    }
}
