<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the set of accounts and campaigns to include in the report.
     * @link http://msdn.microsoft.com/en-us/library/bb671549(v=msads.90).aspx AccountThroughCampaignReportScope Data Object
     * 
     * @uses CampaignReportScope
     * @used-by BudgetSummaryReportRequest
     * @used-by CampaignPerformanceReportRequest
     */
    final class AccountThroughCampaignReportScope
    {
        /**
         * An array of account identifiers that identifies the account data to include in the report.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * An array of CampaignReportScope objects that identifies the campaign data to include in the report.
         * @var CampaignReportScope[]
         */
        public $Campaigns;
    }

}
