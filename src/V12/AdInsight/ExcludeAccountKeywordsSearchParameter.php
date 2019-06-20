<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * The exclude account keywords search parameter filter that you can include when requesting keyword ideas.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/excludeaccountkeywordssearchparameter?view=bingads-12 ExcludeAccountKeywordsSearchParameter Data Object
     */
    final class ExcludeAccountKeywordsSearchParameter extends SearchParameter
    {
        /**
         * Determines whether or not to exclude existing account keywords from the returned keyword ideas.
         * @var boolean
         */
        public $ExcludeAccountKeywords;
    }

}
