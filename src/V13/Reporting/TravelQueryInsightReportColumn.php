<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the travel query insight report.
     * @link https:/learn.microsoft.com/advertising/reporting-service/travelqueryinsightreportcolumn?view=bingads-13 TravelQueryInsightReportColumn Value Set
     * 
     * @used-by TravelQueryInsightReportRequest
     */
    final class TravelQueryInsightReportColumn
    {
        /** The search query text. */
        const SearchQuery = 'SearchQuery';

        /** The name of the country. */
        const Country = 'Country';

        /** The name of the region. */
        const Region = 'Region';

        /** The name of the metroplitan area. */
        const MetroArea = 'MetroArea';

        /** The name of the city. */
        const City = 'City';

        /** The point of sale postal/ZIP code. */
        const PostalCode = 'PostalCode';

        /** The primary vertical category. */
        const L1Vertical = 'L1Vertical';

        /** The secondary vertical category. */
        const L2Vertical = 'L2Vertical';

        /** The tertiary vertical category. */
        const L3Vertical = 'L3Vertical';

        /** The point of sale country. */
        const POSCountry = 'POSCountry';

        /** The point of sale region. */
        const POSRegion = 'POSRegion';

        /** The point of sale city. */
        const POSCity = 'POSCity';

        /** The number of impressions of ads displayed for a specific brand. */
        const BrandImpressions = 'BrandImpressions';

        /** The number of ad clicks originating from ads displayed for a specific brand. */
        const BrandClicks = 'BrandClicks';

        /** The total amount of spend on ad impressions for a specific brand. */
        const BrandSpend = 'BrandSpend';

        /** Reserved. */
        const MSAImpressions = 'MSAImpressions';

        /** Reserved. */
        const MSAClicks = 'MSAClicks';

        /** Reserved. */
        const MSASpend = 'MSASpend';
    }

}
