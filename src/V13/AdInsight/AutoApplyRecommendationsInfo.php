<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the auto-apply opt-in status for specific recommendation type.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/autoapplyrecommendationsinfo?view=bingads-13 AutoApplyRecommendationsInfo Data Object
     * 
     * @used-by GetAutoApplyOptInStatusResponse
     */
    final class AutoApplyRecommendationsInfo
    {
        /**
         * True for opt-in, False for opt-out.
         * @var boolean
         */
        public $AAROptInStatus;

        /**
         * Supported recommendation types in auto-apply mode.
         * @var string
         */
        public $RecommendationType;
    }

}
