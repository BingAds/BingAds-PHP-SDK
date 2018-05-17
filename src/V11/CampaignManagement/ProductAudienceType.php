<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible types of product audiences.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/productaudiencetype?view=bingads-11 ProductAudienceType Value Set
     * 
     * @used-by ProductAudience
     */
    final class ProductAudienceType
    {
        /** The audience includes general visitors. */
        const GeneralVisitors = 'GeneralVisitors';

        /** The audience includes product searchers. */
        const ProductSearchers = 'ProductSearchers';

        /** The audience includes product viewers. */
        const ProductViewers = 'ProductViewers';

        /** The audience includes shopping cart abandoners. */
        const ShoppingCartAbandoners = 'ShoppingCartAbandoners';

        /** The audience includes past buyers. */
        const PastBuyers = 'PastBuyers';
    }

}
