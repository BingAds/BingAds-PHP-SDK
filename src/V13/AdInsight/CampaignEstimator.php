<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Contains campaign filter criteria and a nested list of ad group and keyword level filter criteria for traffic estimates.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/campaignestimator?view=bingads-13 CampaignEstimator Data Object
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
