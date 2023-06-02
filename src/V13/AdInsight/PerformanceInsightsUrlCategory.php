<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the URL category for performance insights.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/performanceinsightsurlcategory?view=bingads-13 PerformanceInsightsUrlCategory Value Set
     * 
     * @used-by UrlParameter
     */
    final class PerformanceInsightsUrlCategory
    {
        /** The url is for recommendations. */
        const Recommendation = 'Recommendation';

        /** The url is for demand settings. */
        const Setting = 'Setting';

        /** The url is for reports. */
        const Report = 'Report';

        /** The URL is for help documents. */
        const HelpDoc = 'HelpDoc';
    }

}
