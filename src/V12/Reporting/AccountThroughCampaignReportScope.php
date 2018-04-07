<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the set of accounts and campaigns to include in the report.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/accountthroughcampaignreportscope?view=bingads-12 AccountThroughCampaignReportScope Data Object
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
