<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/urlparameter?view=bingads-13 UrlParameter Data Object
     * 
     * @uses PerformanceInsightsUrlCategory
     * @uses PerformanceInsightsUrlId
     */
    final class UrlParameter extends PerformanceInsightsMessageParameter
    {
        /**
         * Reserved.
         * @var string
         */
        public $SuggestedText;

        /**
         * Reserved.
         * @var string
         */
        public $SuggestedUrl;

        /**
         * Reserved.
         * @var PerformanceInsightsUrlCategory
         */
        public $UrlCategory;

        /**
         * Reserved.
         * @var PerformanceInsightsUrlId
         */
        public $UrlId;
    }

}
