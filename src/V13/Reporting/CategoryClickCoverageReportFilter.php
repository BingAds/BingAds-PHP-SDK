<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the category click coverage report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/categoryclickcoveragereportfilter?view=bingads-13 CategoryClickCoverageReportFilter Data Object
     * 
     * @used-by CategoryClickCoverageReportRequest
     */
    final class CategoryClickCoverageReportFilter
    {
        /**
         * The report will include data for only the specified countries/regions where the user that clicked the ad is located.
         * @var string[]
         */
        public $CountryCode;

        /**
         * A particular supply sector, such as Travel and Tourism or Apparel.
         * @var string[]
         */
        public $L1Vertical;

        /**
         * A more detailed segment of an L1 vertical.
         * @var string[]
         */
        public $L2Vertical;

        /**
         * The most specific segment within a larger L1 vertical.
         * @var string[]
         */
        public $L3Vertical;
    }

}
