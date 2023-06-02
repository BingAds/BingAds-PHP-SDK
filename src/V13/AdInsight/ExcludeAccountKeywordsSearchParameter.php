<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The exclude account keywords search parameter filter that you can include when requesting keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/excludeaccountkeywordssearchparameter?view=bingads-13 ExcludeAccountKeywordsSearchParameter Data Object
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
