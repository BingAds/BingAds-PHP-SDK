<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The query search parameter that you can use as a seed for new keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/querysearchparameter?version=11 QuerySearchParameter Data Object
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
