<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The idea text search parameter filter that you can include when requesting keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/ideatextsearchparameter?view=bingads-13 IdeaTextSearchParameter Data Object
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
