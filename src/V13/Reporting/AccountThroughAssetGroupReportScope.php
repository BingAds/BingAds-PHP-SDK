<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/reporting-service/accountthroughassetgroupreportscope?view=bingads-13 AccountThroughAssetGroupReportScope Data Object
     * 
     * @uses AssetGroupReportScope
     * @uses CampaignReportScope
     * @used-by AssetGroupPerformanceReportRequest
     */
    final class AccountThroughAssetGroupReportScope
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * Reserved.
         * @var AssetGroupReportScope[]
         */
        public $AssetGroups;

        /**
         * Reserved.
         * @var CampaignReportScope[]
         */
        public $Campaigns;
    }

}
