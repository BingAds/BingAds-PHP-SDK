<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets text asset suggestions by final URLs.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/gettextassetsuggestionsbyfinalurls?view=bingads-13 GetTextAssetSuggestionsByFinalUrls Request Object
     * 
     * @used-by BingAdsAdInsightService::GetTextAssetSuggestionsByFinalUrls
     */
    final class GetTextAssetSuggestionsByFinalUrlsRequest
    {
        /**
         * The last or final URL where a user is ultimately taken, whether or not the click to final URL path included any redirects.
         * @var string[]
         */
        public $FinalUrls;
    }
}
