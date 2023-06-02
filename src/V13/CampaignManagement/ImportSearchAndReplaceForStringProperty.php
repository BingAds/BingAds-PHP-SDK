<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the string search and replace Google import option.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/importsearchandreplaceforstringproperty?view=bingads-13 ImportSearchAndReplaceForStringProperty Data Object
     * 
     * @used-by GoogleImportOption
     */
    final class ImportSearchAndReplaceForStringProperty
    {
        /**
         * The replacement string to use in place of the search string.
         * @var string
         */
        public $ReplaceString;

        /**
         * The string to find.
         * @var string
         */
        public $SearchString;
    }

}
