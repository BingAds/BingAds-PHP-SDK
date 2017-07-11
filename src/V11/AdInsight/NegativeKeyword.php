<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines a negative keyword with match type.
     * @link http://msdn.microsoft.com/en-us/library/mt784419(v=msads.110).aspx NegativeKeyword Data Object
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
        public $MatchType;

        /**
         * The negative keyword text.
         * @var string
         */
        public $Text;
    }

}
