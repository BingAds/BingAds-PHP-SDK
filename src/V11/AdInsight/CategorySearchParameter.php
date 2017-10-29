<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The keyword category search parameter that you can use as a seed for new keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/categorysearchparameter?version=11 CategorySearchParameter Data Object
     */
    final class CategorySearchParameter extends SearchParameter
    {
        /**
         * The Bing Ads identifier for the keyword category.
         * @var integer
         */
        public $CategoryId;
    }

}
