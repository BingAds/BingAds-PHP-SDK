<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more labels to an account.
     * @link http://msdn.microsoft.com/en-us/library/mt803285(v=msads.110).aspx AddLabels Request Object
     * 
     * @uses Label
     * @used-by BingAdsCampaignManagementService::AddLabels
     */
    final class AddLabelsRequest
    {
        public $Labels;
    }
}
