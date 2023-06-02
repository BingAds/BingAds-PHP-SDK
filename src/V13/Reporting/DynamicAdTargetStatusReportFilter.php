<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the dynamic ad target status values that you can use to filter the report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/dynamicadtargetstatusreportfilter?view=bingads-13 DynamicAdTargetStatusReportFilter Value Set
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
