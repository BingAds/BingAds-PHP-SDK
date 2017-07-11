<?php
// Generated on 7/10/2017 3:08:05 PM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the types of changes to entities by which you can filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/hh912354(v=msads.110).aspx ChangeTypeReportFilter Value Set
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
