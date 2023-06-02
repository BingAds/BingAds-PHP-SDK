<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the criteria to use to filter the ad extension by ad report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/adextensionbyadreportfilter?view=bingads-13 AdExtensionByAdReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdGroupStatusReportFilter
     * @uses AdStatusReportFilter
     * @uses CampaignStatusReportFilter
     * @uses DeviceOSReportFilter
     * @uses DeviceTypeReportFilter
     * @used-by AdExtensionByAdReportRequest
     */
    final class AdExtensionByAdReportFilter
    {
        /**
         * The report will include data for only the account status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will include data for only the ad group status.
         * @var AdGroupStatusReportFilter
         */
        public $AdGroupStatus;

        /**
         * The report will include data for only the ad status.
         * @var AdStatusReportFilter
         */
        public $AdStatus;

        /**
         * The report will include data for only the campaign status.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;

        /**
         * The report will include data where the ad is displayed on the specified device operating systems.
         * @var DeviceOSReportFilter
         */
        public $DeviceOS;

        /**
         * The report will include data where the ad is displayed on the specified device types.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;
    }

}
