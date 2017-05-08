<?php
// Generated on 5/7/2017 5:45:54 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the types of changes to entities by which you can filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/hh912354(v=msads.90).aspx ChangeTypeReportFilter Value Set
     * 
     * @used-by SearchCampaignChangeHistoryReportFilter
     */
    final class ChangeTypeReportFilter
    {
        /** The report will include data for entities that have been added. */
        const Added = 'Added';

        /** The report will include data for entities that have been deleted. */
        const Deleted = 'Deleted';

        /** The report will include data for elements of entities whose values have been updated. */
        const Changed = 'Changed';
    }

}
