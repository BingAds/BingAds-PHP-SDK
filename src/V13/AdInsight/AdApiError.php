<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an Ad Insight Ad API error object that contains the details that explain why the service operation failed.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/adapierror?view=bingads-13 AdApiError Data Object
     * 
     * @used-by AdApiFaultDetail
     */
    final class AdApiError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that contains additional details about the error.
         * @var string
         */
        public $Detail;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

}
