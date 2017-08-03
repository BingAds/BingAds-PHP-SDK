<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The URL search parameter that you can use as a seed for new keyword ideas.
     * @link http://msdn.microsoft.com/en-us/library/mt784420(v=msads.110).aspx UrlSearchParameter Data Object
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
