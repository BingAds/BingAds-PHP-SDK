<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an experiment where you split a campaign's budget and traffic, and then run an A/B test during a limited date range.
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
         * The Bing Ads identifier of the campaign used as the base for the experiment campaign.
         * @var integer
         */
        public $BaseCampaignId;

        /**
         * The date that the experiment will expire.
         * @var Date
         */
        public $EndDate;

        /**
         * The Bing Ads identifier of the campaign that is created as a copy of the base campaign.
         * @var integer
         */
        public $ExperimentCampaignId;

        /**
         * The status of the experiment.
         * @var string
         */
        public $ExperimentStatus;

        /**
         * Reserved for future use.
         * @var string
         */
        public $ExperimentType;

        /**
         * The unique Bing Ads identifier of the experiment.
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
