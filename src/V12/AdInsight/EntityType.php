<?php

namespace Microsoft\BingAds\V12\AdInsight;

{
    /**
     * Defines the entity types for retrieving auction insights.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/entitytype?view=bingads-12 EntityType Value Set
     * 
     * @used-by GetAuctionInsightDataRequest
     */
    final class EntityType
    {
        /** Reserved. */
        const Account = 'Account';

        /** Reserved. */
        const Campaign = 'Campaign';

        /** Reserved. */
        const AdGroup = 'AdGroup';

        /** Reserved. */
        const Keyword = 'Keyword';
    }

}
