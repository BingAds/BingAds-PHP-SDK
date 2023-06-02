<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The key and value pair of long and long values defined by the Campaign Management service.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/keyvaluepairoflonglong?view=bingads-13 KeyValuePairOflonglong Data Object
     * 
     * @used-by GetImportEntityIdsMappingResponse
     */
    final class KeyValuePairOflonglong
    {
        /**
         * The key to the value.
         * @var integer
         */
        public $key;

        /**
         * The value mapped to the key.
         * @var integer
         */
        public $value;
    }

}
