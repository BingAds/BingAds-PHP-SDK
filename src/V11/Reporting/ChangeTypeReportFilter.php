<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the types of changes to entities by which you can filter the report data.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/changetypereportfilter?version=11 ChangeTypeReportFilter Value Set
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
