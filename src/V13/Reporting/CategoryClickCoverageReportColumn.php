<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the CategoryClickCoverageReportColumn.
     * @link https:/learn.microsoft.com/advertising/reporting-service/categoryclickcoveragereportcolumn?view=bingads-13 CategoryClickCoverageReportColumn Value Set
     * 
     * @used-by CategoryClickCoverageReportRequest
     */
    final class CategoryClickCoverageReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The customer name. */
        const CustomerName = 'CustomerName';

        /** A particular supply sector, such as Travel and Tourism or Apparel. */
        const L1Vertical = 'L1Vertical';

        /** A more detailed segment of an L1 vertical. */
        const L2Vertical = 'L2Vertical';

        /** The most specific segment within a larger L1 vertical. */
        const L3Vertical = 'L3Vertical';

        /** The date range for the week that your data is from starting with Monday. */
        const WeekStartingMonday = 'WeekStartingMonday';

        /** The percentage of clicks your account(s) received compared to the total number of clicks by all advertisers for a specific L1 ? L3 slice. */
        const MarketplaceClickCoverage = 'MarketplaceClickCoverage';

        /** The country-specific Bing marketplace, such as Bing France or Bing India. */
        const Country = 'Country';

        /** Reserved. */
        const ProportionOfSpend = 'ProportionOfSpend';
    }

}
