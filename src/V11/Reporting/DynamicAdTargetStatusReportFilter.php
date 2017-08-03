<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the dynamic ad target status values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/mt793840(v=msads.110).aspx DynamicAdTargetStatusReportFilter Value Set
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
