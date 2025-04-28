<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a Campaign Management operation error that contains the details that explain why the service operation failed.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/operationerror?view=bingads-13 OperationError Data Object
     * 
     * @used-by AdRecommendationMediaRefineResult
     * @used-by AdRecommendationTextRefineResult
     * @used-by ApiFaultDetail
     * @used-by EditorialApiFaultDetail
     * @used-by HealthCheckError
     */
    final class OperationError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the error.
         * @var string
         */
        public $Details;

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
