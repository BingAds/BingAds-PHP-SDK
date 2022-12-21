<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the responsive search ads to be suggested.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/responsivesearchadsrecommendation?view=bingads-13 ResponsiveSearchAdsRecommendation Data Object
     * 
     * @uses SuggestedResponsiveSearchAd
     */
    final class ResponsiveSearchAdsRecommendation extends Recommendation
    {
        /**
         * The ad info in the recommendation.
         * @var SuggestedResponsiveSearchAd
         */
        public $SuggestedAd;
    }

}
