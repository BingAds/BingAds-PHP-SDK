<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the URL parameter for use with performance insights.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/urlparameter?view=bingads-13 UrlParameter Data Object
     * 
     * @uses PerformanceInsightsUrlCategory
     * @uses PerformanceInsightsUrlId
     */
    final class UrlParameter extends PerformanceInsightsMessageParameter
    {
        /**
         * The suggested string value to substitute for the message.
         * @var string
         */
        public $SuggestedText;

        /**
         * THe Suggested URL.
         * @var string
         */
        public $SuggestedUrl;

        /**
         * The main category of the URL.
         * @var PerformanceInsightsUrlCategory
         */
        public $UrlCategory;

        /**
         * The specified type of the URL.
         * @var PerformanceInsightsUrlId
         */
        public $UrlId;
    }

}
