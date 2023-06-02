<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the ad status values that you can use to filter the report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/adstatusreportfilter?view=bingads-13 AdStatusReportFilter Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdExtensionByAdReportFilter
     * @used-by AdExtensionDetailReportFilter
     * @used-by AdPerformanceReportFilter
     * @used-by DestinationUrlPerformanceReportFilter
     * @used-by DSACategoryPerformanceReportFilter
     * @used-by DSASearchQueryPerformanceReportFilter
     * @used-by ProductDimensionPerformanceReportFilter
     * @used-by ProductPartitionPerformanceReportFilter
     * @used-by ProductPartitionUnitPerformanceReportFilter
     * @used-by ProductSearchQueryPerformanceReportFilter
     * @used-by SearchQueryPerformanceReportFilter
     */
    final class AdStatusReportFilter
    {
        /** The report will contain ads that are active. */
        const Active = 'Active';

        /** The report will contain ads that have failed editorial review. */
        const Rejected = 'Rejected';

        /** The report will contain ads that have been deleted. */
        const Deleted = 'Deleted';

        /** The report will contain ads that are pending editorial review. */
        const Pending = 'Pending';

        /** The report will contain ads that are paused. */
        const Paused = 'Paused';
    }

}
