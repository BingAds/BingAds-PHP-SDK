<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the category insights report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/categoryinsightsreportfilter?view=bingads-13 CategoryInsightsReportFilter Data Object
     * 
     * @used-by CategoryInsightsReportRequest
     */
    final class CategoryInsightsReportFilter
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
