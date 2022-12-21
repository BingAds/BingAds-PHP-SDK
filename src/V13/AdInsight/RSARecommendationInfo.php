<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the info of responsive search ads recommendation.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/rsarecommendationinfo?view=bingads-13 RSARecommendationInfo Data Object
     */
    final class RSARecommendationInfo extends RecommendationInfo
    {
        /**
         * Ad id of the responsive search ad that is created by adopting the recommendation.
         * @var integer
         */
        public $AdId;
    }

}
