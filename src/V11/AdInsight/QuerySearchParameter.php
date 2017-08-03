<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The query search parameter that you can use as a seed for new keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt784421(v=msads.110).aspx QuerySearchParameter Data Object
     */
    final class QuerySearchParameter extends SearchParameter
    {
        /**
         * Up to 200 words or phrases that describe what you're advertising.
         * @var string[]
         */
        public $Queries;
    }

}
