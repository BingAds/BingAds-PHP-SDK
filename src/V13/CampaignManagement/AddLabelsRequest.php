<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more labels to an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addlabels?view=bingads-13 AddLabels Request Object
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
