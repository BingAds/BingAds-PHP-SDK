<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the device operating system values that you can use to filter the report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/deviceosreportfilter?view=bingads-13 DeviceOSReportFilter Value Set
     * 
     * @used-by AccountPerformanceReportFilter
     * @used-by AdExtensionByAdReportFilter
     * @used-by AdExtensionByKeywordReportFilter
     * @used-by AdExtensionDetailReportFilter
     * @used-by AdGroupPerformanceReportFilter
     * @used-by CampaignPerformanceReportFilter
     * @used-by GoalsAndFunnelsReportFilter
     */
    final class DeviceOSReportFilter
    {
        /** The report will include ads displayed on a device operating system other than Android, BlackBerry, iOS, and Windows. */
        const Other = 'Other';

        /** The report will include ads displayed on Windows device operating systems. */
        const Windows = 'Windows';

        /** The report will include ads displayed on iOS device operating systems. */
        const iOS = 'iOS';

        /** The report will include ads displayed on Android device operating systems. */
        const Android = 'Android';

        /** The report will include ads displayed on BlackBerry device operating systems. */
        const BlackBerry = 'BlackBerry';
    }

}
