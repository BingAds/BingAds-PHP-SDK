<?php
// Generated on 7/10/2017 3:08:05 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the device type values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/gg262850(v=msads.110).aspx DeviceTypeReportFilter Value Set
     * 
     * @used-by AccountPerformanceReportFilter
     * @used-by AdDynamicTextPerformanceReportFilter
     * @used-by AdExtensionByAdReportFilter
     * @used-by AdExtensionByKeywordReportFilter
     * @used-by AdExtensionDetailReportFilter
     * @used-by AdGroupPerformanceReportFilter
     * @used-by AdPerformanceReportFilter
     * @used-by CampaignPerformanceReportFilter
     * @used-by ConversionPerformanceReportFilter
     * @used-by DestinationUrlPerformanceReportFilter
     * @used-by GoalsAndFunnelsReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by ProductDimensionPerformanceReportFilter
     * @used-by ProductPartitionPerformanceReportFilter
     * @used-by ProductPartitionUnitPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     */
    final class DeviceTypeReportFilter
    {
        /** The report will include text ads displayed on computers. */
        const Computer = 'Computer';

        /** The report will include text ads displayed on smartphones (any high fidelity device capable of rendering full HTML). */
        const SmartPhone = 'SmartPhone';

        /** The report will include mobile ads displayed on a mobile device. */
        const NonSmartPhone = 'NonSmartPhone';

        /** The report will include text ads displayed on a tablet device. */
        const Tablet = 'Tablet';
    }

}
