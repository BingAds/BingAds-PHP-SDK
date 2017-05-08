<?php
// Generated on 5/7/2017 5:48:05 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a campaign to include in the report.
     * @link http://msdn.microsoft.com/en-us/library/bb671721(v=msads.110).aspx CampaignReportScope Data Object
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
