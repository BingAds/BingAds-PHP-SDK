<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deleteexperiments?view=bingads-12 DeleteExperiments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteExperiments
     */
    final class DeleteExperimentsResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
