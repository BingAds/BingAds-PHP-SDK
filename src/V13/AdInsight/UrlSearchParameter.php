<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The URL search parameter that you can use as a seed for new keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/urlsearchparameter?view=bingads-13 UrlSearchParameter Data Object
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
