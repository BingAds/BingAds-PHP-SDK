<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the text parameter for use with performance insights.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/textparameter?view=bingads-13 TextParameter Data Object
     */
    final class TextParameter extends PerformanceInsightsMessageParameter
    {
        /**
         * The suggested string value to substitute for the message.
         * @var string
         */
        public $SuggestedText;
    }

}
