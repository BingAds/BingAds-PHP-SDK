<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines a campaign to include in the report.
     * @link http://msdn.microsoft.com/en-us/library/bb671721(v=msads.90).aspx CampaignReportScope Data Object
     * 
     * @used-by AccountThroughAdGroupReportScope
     * @used-by AccountThroughCampaignReportScope
     */
    final class CampaignReportScope
    {
        /**
         * The identifier of the account that the campaign belongs to.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifier of the campaign to limit the scope to.
         * @var integer
         */
        public $CampaignId;
    }

}
