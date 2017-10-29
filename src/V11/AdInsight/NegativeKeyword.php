<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines a negative keyword with match type.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/negativekeyword?version=11 NegativeKeyword Data Object
     * 
     * @uses MatchType
     * @used-by CampaignEstimator
     */
    final class NegativeKeyword
    {
        /**
         * The Bing Ads identifier of the negative keyword.
         * @var integer
         */
        public $Id;

        /**
         * The match type of the negative keyword.
         * @var MatchType
         */
        public $MatchType;

        /**
         * The negative keyword text.
         * @var string
         */
        public $Text;
    }

}
