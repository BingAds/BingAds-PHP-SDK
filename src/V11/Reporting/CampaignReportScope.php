<?php
// Generated on 7/10/2017 3:08:05 PM

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
