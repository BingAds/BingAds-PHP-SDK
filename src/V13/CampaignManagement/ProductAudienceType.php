<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible types of product audiences.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/productaudiencetype?view=bingads-13 ProductAudienceType Value Set
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
