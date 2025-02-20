<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a data object for ResponsiveSearchAdAssetRecommendation.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/responsivesearchadassetrecommendation?view=bingads-13 ResponsiveSearchAdAssetRecommendation Data Object
     * 
     * @uses SuggestedResponsiveSearchAd
     */
    final class ResponsiveSearchAdAssetRecommendation extends RecommendationBase
    {
        /**
         * The recommended responsive search ad.
         * @var SuggestedResponsiveSearchAd
         */
        public $RecommendedResponsiveSearchAd;

        /**
         * The ID of the responsive search ad.
         * @var integer
         */
        public $ResponsiveSearchAdId;
    }

}
