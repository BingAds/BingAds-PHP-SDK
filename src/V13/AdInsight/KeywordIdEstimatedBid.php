<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the identifier of the keyword and the suggested bid value for the keyword and match type.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordidestimatedbid?view=bingads-13 KeywordIdEstimatedBid Data Object
     * 
     * @uses KeywordEstimatedBid
     * @used-by GetEstimatedBidByKeywordIdsResponse
     */
    final class KeywordIdEstimatedBid
    {
        /**
         * The identifier of the keyword to which the suggested bid applies.
         * @var integer
         */
        public $KeywordId;

        /**
         * An object that contains the keyword string and the suggested bid value for each match type.
         * @var KeywordEstimatedBid
         */
        public $KeywordEstimatedBid;
    }

}
