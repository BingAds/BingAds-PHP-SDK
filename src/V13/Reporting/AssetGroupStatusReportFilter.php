<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the asset group status values that you can use to filter the report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/assetgroupstatusreportfilter?view=bingads-13 AssetGroupStatusReportFilter Value Set
     * 
     * @used-by AssetGroupPerformanceReportFilter
     * @used-by GeographicPerformanceReportFilter
     * @used-by ProductDimensionPerformanceReportFilter
     * @used-by ProductNegativeKeywordConflictReportFilter
     * @used-by ProductPartitionPerformanceReportFilter
     * @used-by ProductPartitionUnitPerformanceReportFilter
     * @used-by ProductSearchQueryPerformanceReportFilter
     * @used-by PublisherUsagePerformanceReportFilter
     */
    final class AssetGroupStatusReportFilter
    {
        /** The report will contain asset groups that are active. */
        const Active = 'Active';

        /** The report will contain asset groups that are paused. */
        const Paused = 'Paused';

        /** The report will contain asset groups that are deleted. */
        const Deleted = 'Deleted';
    }

}
