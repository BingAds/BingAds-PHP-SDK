<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
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
         * Reserved.
         * @var DecimalRoundedResult
         */
        public $EstAudienceSize;

        /**
         * Reserved.
         * @var DecimalRoundedResult
         */
        public $EstImpression;

        /**
         * Reserved.
         * @var boolean
         */
        public $IsImpressionTooSpecific;

        /**
         * Reserved.
         * @var boolean
         */
        public $IsPrivacyCheckPassed;

        /**
         * Reserved.
         * @var float
         */
        public $SuggestedBid;

        /**
         * Reserved.
         * @var Currency
         */
        public $Currency;

        /**
         * Reserved.
         * @var Breakdowns
         */
        public $Breakdowns;
    }
}
