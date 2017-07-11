<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Contains campaign filter criteria and a nested list of ad group and keyword level filter criteria for traffic estimates.
     * @link http://msdn.microsoft.com/en-us/library/mt784392(v=msads.110).aspx CampaignEstimator Data Object
     * 
     * @uses AdGroupEstimator
     * @uses Criterion
     * @uses NegativeKeyword
     * @used-by GetKeywordTrafficEstimatesRequest
     */
    final class CampaignEstimator
    {
        /**
         * The list of ad group estimators with your ad group and keyword level filter criteria for traffic estimates.
         * @var AdGroupEstimator[]
         */
        public $AdGroupEstimators;

        /**
         * The campaign identifier.
         * @var integer
         */
        public $CampaignId;

        /**
         * The list of campaign level criteria for traffic estimates.
         * @var Criterion[]
         */
        public $Criteria;

        /**
         * The daily budget filter criteria for all keyword traffic estimates in the campaign.
         * @var double
         */
        public $DailyBudget;

        /**
         * The list of negative keyword filter criteria for all keyword traffic estimates in the campaign.
         * @var NegativeKeyword[]
         */
        public $NegativeKeywords;
    }

}
