<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a negative keyword with match type.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/negativekeyword?view=bingads-12 NegativeKeyword Data Object
     * 
     * @uses MatchType
     * @used-by EntityNegativeKeyword
     */
    final class NegativeKeyword extends SharedListItem
    {
        /**
         * The unique Bing Ads identifier of the negative keyword.
         * @var integer
         */
        public $Id;

        /**
         * The type of match to compare the negative keyword and the user's search term.
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
