<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The language search parameter filter that you can include when requesting keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt784411(v=msads.110).aspx LanguageSearchParameter Data Object
     * 
     * @uses LanguageCriterion
     */
    final class LanguageSearchParameter extends SearchParameter
    {
        /**
         * The language criterion list for the returned keyword ideas.
         * @var LanguageCriterion[]
         */
        public $Languages;
    }

}
