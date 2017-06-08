<?php
// Generated on 6/7/2017 5:53:08 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the types of entities by which you can filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/hh912355(v=msads.90).aspx ChangeEntityReportFilter Value Set
     * 
     * @used-by SearchCampaignChangeHistoryReportFilter
     */
    final class ChangeEntityReportFilter
    {
        /** The report will include data for accounts that have been added or deleted, or that have had account elements updated. */
        const Account = 'Account';

        /** The report will include data for campaigns that have been added or deleted, or that have had campaign elements updated. */
        const Campaign = 'Campaign';

        /** The report will include data for ad groups that have been added or deleted, or that have had ad group elements updated. */
        const AdGroup = 'AdGroup';

        /** The report will include data for ads that have been added or deleted, or that have had ad elements updated. */
        const Ad = 'Ad';

        /** The report will include data for keywords that have been added or deleted, or that have had keyword elements updated. */
        const Keyword = 'Keyword';
    }

}
