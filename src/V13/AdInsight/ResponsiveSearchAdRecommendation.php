<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a ResponsiveSearchAdRecommendation data object.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/responsivesearchadrecommendation?view=bingads-13 ResponsiveSearchAdRecommendation Data Object
     * 
     * @uses SuggestedResponsiveSearchAd
     */
    final class ResponsiveSearchAdRecommendation extends RecommendationBase
    {
        /**
         * The ad info in the recommendation.
         * @var SuggestedResponsiveSearchAd
         */
        public $SuggestedAd;
    }

}
