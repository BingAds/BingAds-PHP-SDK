<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the text asset suggestions data object.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/textassetsuggestions?view=bingads-13 TextAssetSuggestions Data Object
     * 
     * @used-by GetTextAssetSuggestionsByFinalUrlsResponse
     */
    final class TextAssetSuggestions
    {
        /**
         * The Final URL of the ad, keyword, or criterion.
         * @var string
         */
        public $FinalUrl;

        /**
         * Text assets that can be reused across multiple ads.
         * @var string[]
         */
        public $TextAssets;
    }

}
