<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Contains a list of keyword estimators with your keyword level filter criteria for traffic estimates.
     * @link http://msdn.microsoft.com/en-us/library/mt784407(v=msads.110).aspx AdGroupEstimator Data Object
     * 
     * @uses KeywordEstimator
     * @used-by CampaignEstimator
     */
    final class AdGroupEstimator
    {
        /**
         * The ad group identifier.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The list of keyword estimators with your keyword level filter criteria for traffic estimates.
         * @var KeywordEstimator[]
         */
        public $KeywordEstimators;

        /**
         * The maximum cost per click filter criteria for all keyword estimates in the ad group.
         * @var double
         */
        public $MaxCpc;
    }

}
