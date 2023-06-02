<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the entity types for retrieving auction insights.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/entitytype?view=bingads-13 EntityType Value Set
     * 
     * @used-by PerformanceInsightsDetail
     * @used-by GetAuctionInsightDataRequest
     * @used-by GetPerformanceInsightsDetailDataByAccountIdRequest
     */
    final class EntityType
    {
        /** Request account level auction insight data. */
        const Account = 'Account';

        /** Request campaign level auction insight data. */
        const Campaign = 'Campaign';

        /** Request ad group level auction insight data. */
        const AdGroup = 'AdGroup';

        /** Request keyword level auction insight data. */
        const Keyword = 'Keyword';
    }

}
