<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getaudiencefullestimation?view=bingads-13 GetAudienceFullEstimation Response Object
     * 
     * @uses RangeResultOfDecimalRoundedResult
     * @uses RangeResultOfdouble
     * @uses DecimalRoundedResult
     * @uses Currency
     * @used-by BingAdsAdInsightService::GetAudienceFullEstimation
     */
    final class GetAudienceFullEstimationResponse
    {
        /**
         * Reserved.
         * @var RangeResultOfDecimalRoundedResult
         */
        public $EstImpression;

        /**
         * Reserved.
         * @var RangeResultOfDecimalRoundedResult
         */
        public $EstAudienceSize;

        /**
         * Reserved.
         * @var RangeResultOfDecimalRoundedResult
         */
        public $EstClick;

        /**
         * Reserved.
         * @var RangeResultOfDecimalRoundedResult
         */
        public $EstSpend;

        /**
         * Reserved.
         * @var RangeResultOfDecimalRoundedResult
         */
        public $EstCostPerEvent;

        /**
         * Reserved.
         * @var RangeResultOfdouble
         */
        public $EstCTR;

        /**
         * Reserved.
         * @var float
         */
        public $SuggestedBid;

        /**
         * Reserved.
         * @var float
         */
        public $SuggestedBudget;

        /**
         * Reserved.
         * @var integer
         */
        public $EventsLostToBid;

        /**
         * Reserved.
         * @var integer
         */
        public $EventsLostToBudget;

        /**
         * Reserved.
         * @var DecimalRoundedResult
         */
        public $EstReachAudienceSize;

        /**
         * Reserved.
         * @var DecimalRoundedResult
         */
        public $EstReachImpression;

        /**
         * Reserved.
         * @var Currency
         */
        public $Currency;
    }
}
