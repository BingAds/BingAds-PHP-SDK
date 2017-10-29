<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the dynamic ad target status values that you can use to filter the report data.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/dynamicadtargetstatusreportfilter?version=11 DynamicAdTargetStatusReportFilter Value Set
     * 
     * @used-by DSAAutoTargetPerformanceReportFilter
     */
    final class DynamicAdTargetStatusReportFilter
    {
        /** The report will contain dynamic ad targets that are active. */
        const Active = 'Active';

        /** The report will contain dynamic ad targets that are paused. */
        const Paused = 'Paused';

        /** The report will contain dynamic ad targets that have been deleted. */
        const Deleted = 'Deleted';
    }

}
