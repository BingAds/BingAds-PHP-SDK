<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The idea text search parameter filter that you can include when requesting keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/ideatextsearchparameter?version=11 IdeaTextSearchParameter Data Object
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
