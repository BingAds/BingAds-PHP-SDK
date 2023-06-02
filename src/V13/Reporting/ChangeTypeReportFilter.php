<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the types of changes to entities by which you can filter the report data.
     * @link https:/learn.microsoft.com/advertising/reporting-service/changetypereportfilter?view=bingads-13 ChangeTypeReportFilter Value Set
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
