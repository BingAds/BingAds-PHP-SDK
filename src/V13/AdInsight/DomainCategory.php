<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains a domain category with website coverage.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/domaincategory?view=bingads-13 DomainCategory Data Object
     * 
     * @used-by GetDomainCategoriesResponse
     */
    final class DomainCategory
    {
        /**
         * Reserved for future use.
         * @var double
         */
        public $Bid;

        /**
         * The category name.
         * @var string
         */
        public $CategoryName;

        /**
         * A score from 0.0 to 1.0 that indicates the percentage of pages in the requested language that belong to a particular domain out of all the pages that Bing has indexed for the same language your website's domain.
         * @var double
         */
        public $Coverage;
    }

}
