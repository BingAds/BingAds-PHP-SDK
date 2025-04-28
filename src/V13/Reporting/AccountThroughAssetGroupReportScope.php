<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a AccountThroughAssetGroupReportScope data object.
     * @link https:/learn.microsoft.com/advertising/reporting-service/accountthroughassetgroupreportscope?view=bingads-13 AccountThroughAssetGroupReportScope Data Object
     * 
     * @uses AssetGroupReportScope
     * @uses CampaignReportScope
     * @used-by AppsPerformanceReportRequest
     * @used-by AssetGroupPerformanceReportRequest
     */
    final class AccountThroughAssetGroupReportScope
    {
        /**
         * A list of up to 1,000 account identifiers to include in the report.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * Array of asset groups to update for the specified campaign.
         * @var AssetGroupReportScope[]
         */
        public $AssetGroups;

        /**
         * list of up to 300 campaigns to include in the report.
         * @var CampaignReportScope[]
         */
        public $Campaigns;
    }

}
