<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/gettextassetsuggestionsbyfinalurls?view=bingads-13 GetTextAssetSuggestionsByFinalUrls Response Object
     * 
     * @uses TextAssetSuggestions
     * @uses BatchError
     * @used-by BingAdsAdInsightService::GetTextAssetSuggestionsByFinalUrls
     */
    final class GetTextAssetSuggestionsByFinalUrlsResponse
    {
        /**
         * Reserved.
         * @var TextAssetSuggestions[]
         */
        public $TextAssetSuggestions;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
