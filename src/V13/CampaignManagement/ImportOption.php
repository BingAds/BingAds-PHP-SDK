<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base object of an import option.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/importoption?view=bingads-13 ImportOption Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @used-by ImportJob
     */
    class ImportOption
    {
        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The type of import option.
         * @var string
         */
        public $Type;
    }

}
