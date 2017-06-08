<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The idea text search parameter filter that you can include when requesting keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt784393(v=msads.110).aspx IdeaTextSearchParameter Data Object
     * 
     * @uses Keyword
     */
    final class IdeaTextSearchParameter extends SearchParameter
    {
        /**
         * The list of keywords that you explicitly want excluded from the list of returned keyword ideas.
         * @var Keyword[]
         */
        public $Excluded;

        /**
         * The list of keywords that you explicitly want included in the list of returned keyword ideas.
         * @var Keyword[]
         */
        public $Included;
    }

}
