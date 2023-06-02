<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets text asset suggestions by final URLs.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/gettextassetsuggestionsbyfinalurls?view=bingads-13 GetTextAssetSuggestionsByFinalUrls Response Object
     * 
     * @uses TextAssetSuggestions
     * @uses BatchError
     * @used-by BingAdsAdInsightService::GetTextAssetSuggestionsByFinalUrls
     */
    final class GetTextAssetSuggestionsByFinalUrlsResponse
    {
        /**
         * The suggested string value to use for the text asset.
         * @var TextAssetSuggestions[]
         */
        public $TextAssetSuggestions;

        /**
         * An array BatchError that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
