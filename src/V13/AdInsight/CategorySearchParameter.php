<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The keyword category search parameter that you can use as a seed for new keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/categorysearchparameter?view=bingads-13 CategorySearchParameter Data Object
     */
    final class CategorySearchParameter extends SearchParameter
    {
        /**
         * The Microsoft Advertising identifier for the keyword category.
         * @var integer
         */
        public $CategoryId;
    }

}
