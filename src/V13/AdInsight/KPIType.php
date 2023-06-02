<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the type of key performance indicator.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/kpitype?view=bingads-13 KPIType Value Set
     * 
     * @used-by PerformanceInsightsDetail
     */
    final class KPIType
    {
        /** Impression metrics. */
        const Impression = 'Impression';

        /** Click metrics. */
        const Click = 'Click';

        /** Spend metrics. */
        const Spend = 'Spend';

        /** Conversion metrics. */
        const Conversion = 'Conversion';
    }

}
