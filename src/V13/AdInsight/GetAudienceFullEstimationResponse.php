<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the audience full estimation.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getaudiencefullestimation?view=bingads-13 GetAudienceFullEstimation Response Object
     * 
     * @uses RangeResultOfDecimalRoundedResult
     * @uses RangeResultOfdouble
     * @uses DecimalRoundedResult
     * @uses Currency
     * @uses DecimalRoundedRangeResultByType
     * @uses RangeResultByTypeOfdouble
     * @uses DecimalRoundedByType
     * @used-by BingAdsAdInsightService::GetAudienceFullEstimation
     */
    final class GetAudienceFullEstimationResponse
    {
        /**
         * Monthly estimated impression with range result.
         * @var RangeResultOfDecimalRoundedResult
         */
        public $EstImpression;

        /**
         * Monthly estimated reach user count with rounded results.
         * @var RangeResultOfDecimalRoundedResult
         */
        public $EstAudienceSize;

        /**
         * Monthly estimated user count with range result.
         * @var RangeResultOfDecimalRoundedResult
         */
        public $EstClick;

        /**
         * Monthly estimated spend with range result.
         * @var RangeResultOfDecimalRoundedResult
         */
        public $EstSpend;

        /**
         * Indicates the estimated cost per event.
         * @var RangeResultOfDecimalRoundedResult
         */
        public $EstCostPerEvent;

        /**
         * Reserved.
         * @var RangeResultOfDecimalRoundedResult
         */
        public $EstCPC;

        /**
         * Estimated click-through rate (CTR) with range result.
         * @var RangeResultOfdouble
         */
        public $EstCTR;

        /**
         * Suggested bid value under the current targeting.
         * @var float
         */
        public $SuggestedBid;

        /**
         * Suggested daily budget value under the current targeting and bid.
         * @var float
         */
        public $SuggestedBudget;

        /**
         * Indicates event lost count due to insufficient input bid.
         * @var integer
         */
        public $EventsLostToBid;

        /**
         * Indicates the event lost count due to insufficient input budget.
         * @var integer
         */
        public $EventsLostToBudget;

        /**
         * Monthly estimated user count with range result.
         * @var DecimalRoundedResult
         */
        public $EstReachAudienceSize;

        /**
         * Monthly estimated impression with range result.
         * @var DecimalRoundedResult
         */
        public $EstReachImpression;

        /**
         * The currency of DailyBudget and Bid.
         * @var Currency
         */
        public $Currency;

        /**
         * Reserved.
         * @var DecimalRoundedRangeResultByType[]
         */
        public $EstImpressionByType;

        /**
         * Reserved.
         * @var DecimalRoundedRangeResultByType[]
         */
        public $EstClickByType;

        /**
         * Reserved.
         * @var DecimalRoundedRangeResultByType[]
         */
        public $EstSpendByType;

        /**
         * Reserved.
         * @var DecimalRoundedRangeResultByType[]
         */
        public $EstCostPerEventByType;

        /**
         * Reserved.
         * @var DecimalRoundedRangeResultByType[]
         */
        public $EstCPCByType;

        /**
         * Reserved.
         * @var DecimalRoundedRangeResultByType[]
         */
        public $EstViewByType;

        /**
         * Reserved.
         * @var RangeResultByTypeOfdouble[]
         */
        public $EstCTRByType;

        /**
         * Reserved.
         * @var DecimalRoundedByType[]
         */
        public $EstReachImpressionByType;
    }
}
