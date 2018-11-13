<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updateexperiments?view=bingads-12 UpdateExperiments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateExperiments
     */
    final class UpdateExperimentsResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
