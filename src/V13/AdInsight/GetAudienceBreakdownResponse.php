<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the audience breakdown.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getaudiencebreakdown?view=bingads-13 GetAudienceBreakdown Response Object
     * 
     * @uses DecimalRoundedResult
     * @uses Currency
     * @uses Breakdowns
     * @used-by BingAdsAdInsightService::GetAudienceBreakdown
     */
    final class GetAudienceBreakdownResponse
    {
        /**
         * Monthly estimated reach user count with rounded results.
         * @var DecimalRoundedResult
         */
        public $EstAudienceSize;

        /**
         * Monthly estimated impression with range result.
         * @var DecimalRoundedResult
         */
        public $EstImpression;

        /**
         * Indicates if the impression is too specific.
         * @var boolean
         */
        public $IsImpressionTooSpecific;

        /**
         * Indicates if the estimated audience size passes the privacy check.
         * @var boolean
         */
        public $IsPrivacyCheckPassed;

        /**
         * Suggested bid value under the current targeting.
         * @var float
         */
        public $SuggestedBid;

        /**
         * The currency of DailyBudget and Bid.
         * @var Currency
         */
        public $Currency;

        /**
         * The audience breakdown categories.
         * @var Breakdowns
         */
        public $Breakdowns;
    }
}
