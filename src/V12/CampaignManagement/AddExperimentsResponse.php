<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addexperiments?view=bingads-12 AddExperiments Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddExperiments
     */
    final class AddExperimentsResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $ExperimentIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
