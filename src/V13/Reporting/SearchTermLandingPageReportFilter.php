<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the search term landing page report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/searchtermlandingpagereportfilter?view=bingads-13 SearchTermLandingPageReportFilter Data Object
     * 
     * @uses AdTypeReportFilter
     * @uses DeliveredMatchTypeReportFilter
     * @uses LanguageReportFilter
     * @used-by SearchTermLandingPageReportRequest
     */
    final class SearchTermLandingPageReportFilter
    {
        /**
         * Reserved.
         * @var AdTypeReportFilter
         */
        public $AdType;

        /**
         * Reserved.
         * @var DeliveredMatchTypeReportFilter
         */
        public $DeliveredMatchType;

        /**
         * Reserved.
         * @var LanguageReportFilter
         */
        public $Language;

        /**
         * Reserved.
         * @var string[]
         */
        public $SearchQueries;
    }

}
