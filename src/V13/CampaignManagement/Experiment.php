<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an experiment where you split a campaign's budget and traffic, and then run an A/B test during a limited date range.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/experiment?view=bingads-13 Experiment Data Object
     * 
     * @uses Date
     * @used-by AddExperimentsRequest
     * @used-by GetExperimentsByIdsResponse
     * @used-by UpdateExperimentsRequest
     */
    final class Experiment
    {
        /**
         * The Microsoft Advertising identifier of the campaign used as the base for the experiment campaign.
         * @var integer
         */
        public $BaseCampaignId;

        /**
         * The date that the experiment will expire.
         * @var Date
         */
        public $EndDate;

        /**
         * The Microsoft Advertising identifier of the campaign that is created as a copy of the base campaign.
         * @var integer
         */
        public $ExperimentCampaignId;

        /**
         * The status of the experiment.
         * @var string
         */
        public $ExperimentStatus;

        /**
         * Determines whether to show individual customers ads from the experiment and the original campaign randomly, or only from one or the other.
         * @var string
         */
        public $ExperimentType;

        /**
         * The unique Microsoft Advertising identifier of the experiment.
         * @var integer
         */
        public $Id;

        /**
         * The name of the experiment.
         * @var string
         */
        public $Name;

        /**
         * The date that the experiment campaign can begin serving ads.
         * @var Date
         */
        public $StartDate;

        /**
         * The percentage of the base campaign's budget and ad traffic that you want to allocate for this experiment.
         * @var integer
         */
        public $TrafficSplitPercent;
    }

}
