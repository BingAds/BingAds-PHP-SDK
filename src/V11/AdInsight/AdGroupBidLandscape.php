<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains a list of estimated clicks, cost, and impressions from 1 to 7 days for the ad group identifier given the suggested bid.
     * @link http://msdn.microsoft.com/en-us/library/mt219312(v=msads.110).aspx AdGroupBidLandscape Data Object
     * 
     * @uses AdGroupBidLandscapeType
     * @uses DayMonthAndYear
     * @uses BidLandscapePoint
     * @used-by GetBidLandscapeByAdGroupIdsResponse
     */
    final class AdGroupBidLandscape
    {
        public $AdGroupId;
        public $AdGroupBidLandscapeType;
        public $StartDate;
        public $EndDate;
        public $BidLandscapePoints;
    }

}
