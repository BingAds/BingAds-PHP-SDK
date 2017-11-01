<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The URL search parameter that you can use as a seed for new keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/urlsearchparameter?view=bingads-11 UrlSearchParameter Data Object
     */
    final class UrlSearchParameter extends SearchParameter
    {
        /**
         * The URL of your website or a page on your website.
         * @var string
         */
        public $Url;
    }

}
