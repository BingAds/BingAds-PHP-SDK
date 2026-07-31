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
        /** The search query entered by the user. */
        const SearchQuery = 'SearchQuery';

        /** The country of interest. */
        const Country = 'Country';

        /** The region of interest. */
        const Region = 'Region';

        /** The metro area of interest. */
        const MetroArea = 'MetroArea';

        /** The city of interest. */
        const City = 'City';

        /** The searcher's location at the postal code level. */
        const PostalCode = 'PostalCode';

        /** The primary supply vertical. */
        const L1Vertical = 'L1Vertical';

        /** The secondary supply vertical. */
        const L2Vertical = 'L2Vertical';

        /** The tertiary supply vertical. */
        const L3Vertical = 'L3Vertical';

        /** The searcher's location at the country level. */
        const POSCountry = 'POSCountry';

        /** The searcher's location at the region level. */
        const POSRegion = 'POSRegion';

        /** The searcher's location at the city level. */
        const POSCity = 'POSCity';

        /** Your brand's ad impressions. */
        const BrandImpressions = 'BrandImpressions';

        /** Your brand's ad clicks. */
        const BrandClicks = 'BrandClicks';

        /** Your brand's ad spend. */
        const BrandSpend = 'BrandSpend';

        /** The number of Microsoft Advertising impressions for this query. */
        const MSAImpressions = 'MSAImpressions';

        /** The number of Microsoft Advertising clicks for this query. */
        const MSAClicks = 'MSAClicks';

        /** The Microsoft Advertising spend on this query. */
        const MSASpend = 'MSASpend';
    }

}
