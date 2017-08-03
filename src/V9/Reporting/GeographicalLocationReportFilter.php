<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the criteria to use to filter the geographical location report data.
     * @link http://msdn.microsoft.com/en-us/library/dn393954(v=msads.90).aspx GeographicalLocationReportFilter Data Object
     * 
     * @uses AdDistributionReportFilter
     * @used-by GeographicalLocationReportRequest
     */
    final class GeographicalLocationReportFilter
    {
        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the specified countries/regions where the user that clicked the ad is located.
         * @var string[]
         */
        public $CountryCode;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;
    }

}
