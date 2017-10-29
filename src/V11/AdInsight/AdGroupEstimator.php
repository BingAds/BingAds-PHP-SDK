<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Contains a list of keyword estimators with your keyword level filter criteria for traffic estimates.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/adgroupestimator?version=11 AdGroupEstimator Data Object
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
