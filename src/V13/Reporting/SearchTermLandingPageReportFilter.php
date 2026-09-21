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
         * Includes rows in the report where the ad type matches one of the specified ad types.
         * @var AdTypeReportFilter
         */
        public $AdType;

        /**
         * Includes rows in the report where the delivered match type matches one of the specified match types.
         * @var DeliveredMatchTypeReportFilter
         */
        public $DeliveredMatchType;

        /**
         * Includes rows in the report where the language matches one of the specified languages.
         * @var LanguageReportFilter
         */
        public $Language;

        /**
         * Includes rows in the report where the search term matches one of the specified search query strings.
         * @var string[]
         */
        public $SearchQueries;
    }

}
