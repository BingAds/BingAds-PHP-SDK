<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an Ad Insight batch error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/batcherror?view=bingads-13 BatchError Data Object
     * 
     * @used-by ApiFaultDetail
     * @used-by ApplyRecommendationsResponse
     * @used-by DismissRecommendationsResponse
     * @used-by GetTextAssetSuggestionsByFinalUrlsResponse
     * @used-by SetAutoApplyOptInStatusResponse
     * @used-by TagRecommendationsResponse
     */
    final class BatchError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the batch error.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * The zero-based index of the item in the batch of items in the request message that failed.
         * @var integer
         */
        public $Index;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

}
