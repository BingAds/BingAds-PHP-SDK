<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The query search parameter that you can use as a seed for new keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/querysearchparameter?view=bingads-13 QuerySearchParameter Data Object
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
