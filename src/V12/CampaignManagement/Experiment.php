<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/experiment?view=bingads-12 Experiment Data Object
     * 
     * @uses Date
     * @used-by AddExperimentsRequest
     * @used-by GetExperimentsByIdsResponse
     * @used-by UpdateExperimentsRequest
     */
    final class Experiment
    {
        /**
         * Reserved.
         * @var integer
         */
        public $BaseCampaignId;

        /**
         * Reserved.
         * @var Date
         */
        public $EndDate;

        /**
         * Reserved.
         * @var integer
         */
        public $ExperimentCampaignId;

        /**
         * Reserved.
         * @var string
         */
        public $ExperimentStatus;

        /**
         * Reserved.
         * @var string
         */
        public $ExperimentType;

        /**
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var string
         */
        public $Name;

        /**
         * Reserved.
         * @var Date
         */
        public $StartDate;

        /**
         * Reserved.
         * @var integer
         */
        public $TrafficSplitPercent;
    }

}
