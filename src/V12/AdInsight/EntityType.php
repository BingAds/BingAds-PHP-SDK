<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Defines the entity types for retrieving auction insights.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/entitytype?view=bingads-12 EntityType Value Set
     * 
     * @used-by GetAuctionInsightDataRequest
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
