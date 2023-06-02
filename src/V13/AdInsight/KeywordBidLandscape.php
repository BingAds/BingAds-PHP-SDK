<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains a list of estimated clicks, cost, and impressions from 1 to 7 days for the keyword identifier given the suggested bid.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/keywordbidlandscape?view=bingads-13 KeywordBidLandscape Data Object
     * 
     * @uses DayMonthAndYear
     * @uses BidLandscapePoint
     * @used-by GetBidLandscapeByKeywordIdsResponse
     */
    final class KeywordBidLandscape
    {
        /**
         * The keyword identifier.
         * @var integer
         */
        public $KeywordId;

        /**
         * The first date used to calculate the bid landscape.
         * @var DayMonthAndYear
         */
        public $StartDate;

        /**
         * The most recent date used to calculate the bid landscape.
         * @var DayMonthAndYear
         */
        public $EndDate;

        /**
         * The list of the total estimated clicks, cost, and impressions from StartDate to EndDate given the suggested bid.
         * @var BidLandscapePoint[]
         */
        public $BidLandscapePoints;
    }

}
