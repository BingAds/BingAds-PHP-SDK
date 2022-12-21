<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the set of accounts, campaigns, and ad groups to include in the report.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/accountthroughadgroupreportscope?view=bingads-13 AccountThroughAdGroupReportScope Data Object
     * 
     * @uses AdGroupReportScope
     * @uses CampaignReportScope
     * @used-by AdDynamicTextPerformanceReportRequest
     * @used-by AdExtensionByAdReportRequest
     * @used-by AdExtensionByKeywordReportRequest
     * @used-by AdExtensionDetailReportRequest
     * @used-by AdGroupPerformanceReportRequest
     * @used-by AdPerformanceReportRequest
     * @used-by AgeGenderAudienceReportRequest
     * @used-by AudiencePerformanceReportRequest
     * @used-by CallDetailReportRequest
     * @used-by ConversionPerformanceReportRequest
     * @used-by DestinationUrlPerformanceReportRequest
     * @used-by DSAAutoTargetPerformanceReportRequest
     * @used-by DSACategoryPerformanceReportRequest
     * @used-by DSASearchQueryPerformanceReportRequest
     * @used-by GeographicPerformanceReportRequest
     * @used-by GoalsAndFunnelsReportRequest
     * @used-by HotelDimensionPerformanceReportRequest
     * @used-by HotelGroupPerformanceReportRequest
     * @used-by KeywordPerformanceReportRequest
     * @used-by NegativeKeywordConflictReportRequest
     * @used-by ProductDimensionPerformanceReportRequest
     * @used-by ProductMatchCountReportRequest
     * @used-by ProductNegativeKeywordConflictReportRequest
     * @used-by ProductPartitionPerformanceReportRequest
     * @used-by ProductPartitionUnitPerformanceReportRequest
     * @used-by ProductSearchQueryPerformanceReportRequest
     * @used-by ProfessionalDemographicsAudienceReportRequest
     * @used-by PublisherUsagePerformanceReportRequest
     * @used-by SearchCampaignChangeHistoryReportRequest
     * @used-by SearchQueryPerformanceReportRequest
     * @used-by ShareOfVoiceReportRequest
     * @used-by UserLocationPerformanceReportRequest
     */
    final class AccountThroughAdGroupReportScope
    {
        /**
         * A list of up to 1,000 account identifiers to include in the report.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * A list of up to 300 ad groups to include in the report.
         * @var AdGroupReportScope[]
         */
        public $AdGroups;

        /**
         * A list of up to 300 campaigns to include in the report.
         * @var CampaignReportScope[]
         */
        public $Campaigns;
    }

}
