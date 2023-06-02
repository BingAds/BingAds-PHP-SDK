<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an error object that contains batch error details for the top level list index and a list of batch errors corresponding to the  nested list index.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/batcherrorcollection?view=bingads-13 BatchErrorCollection Data Object
     * 
     * @uses BatchError
     * @uses KeyValuePairOfstringstring
     * @used-by AddAdExtensionsResponse
     * @used-by AddAdGroupCriterionsResponse
     * @used-by AddCampaignCriterionsResponse
     * @used-by AddNegativeKeywordsToEntitiesResponse
     * @used-by DeleteNegativeKeywordsFromEntitiesResponse
     * @used-by UpdateAdExtensionsResponse
     * @used-by UpdateAdGroupCriterionsResponse
     * @used-by UpdateCampaignCriterionsResponse
     */
    class BatchErrorCollection
    {
        /**
         * A list of batch errors corresponding to the nested list index.
         * @var BatchError[]
         */
        public $BatchErrors;

        /**
         * A numeric error code that identifies the error for the top level list index.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the batch error for the top level list index.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error for the top level list index.
         * @var string
         */
        public $ErrorCode;

        /**
         * The name of the data object's element where the error occurred.
         * @var string
         */
        public $FieldPath;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The zero-based top level list index in the request message that failed.
         * @var integer
         */
        public $Index;

        /**
         * A message that describes the error for the top level list index.
         * @var string
         */
        public $Message;

        /**
         * Reserved for internal use.
         * @var string
         */
        public $Type;
    }

}
