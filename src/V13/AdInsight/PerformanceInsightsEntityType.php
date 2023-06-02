<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the entity types for retrieving performance insights.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/performanceinsightsentitytype?view=bingads-13 PerformanceInsightsEntityType Value Set
     * 
     * @used-by EntityParameter
     */
    final class PerformanceInsightsEntityType
    {
        /** Account level data. */
        const Account = 'Account';

        /** Campaign level data. */
        const Campaign = 'Campaign';

        /** Ad group level data. */
        const AdGroup = 'AdGroup';

        /** Keyword level data. */
        const Keyword = 'Keyword';

        /** Product group level data. */
        const ProductGroup = 'ProductGroup';

        /** Search term level data. */
        const SearchTerm = 'SearchTerm';

        /** Website level data. */
        const Website = 'Website';
    }

}
