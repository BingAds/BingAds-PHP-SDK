<?php
// Generated on 6/7/2017 5:55:20 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines an ad group to include in the report.
     * @link http://msdn.microsoft.com/en-us/library/bb671622(v=msads.110).aspx AdGroupReportScope Data Object
     * 
     * @used-by AccountThroughAdGroupReportScope
     */
    final class AdGroupReportScope
    {
        /**
         * The identifier of the account that the ad group belongs to.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifier of the campaign that the ad group belongs to.
         * @var integer
         */
        public $CampaignId;

        /**
         * The identifier of the ad group to limit the scope to.
         * @var integer
         */
        public $AdGroupId;
    }

}
