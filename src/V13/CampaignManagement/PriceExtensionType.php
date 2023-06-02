<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible types of price ad extensions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/priceextensiontype?view=bingads-13 PriceExtensionType Value Set
     * 
     * @used-by PriceAdExtension
     */
    final class PriceExtensionType
    {
        /** Reserved for forward compatibility. */
        const Unknown = 'Unknown';

        /** The header and description of the PriceAdExtension are related to brands. */
        const Brands = 'Brands';

        /** The header and description of the PriceAdExtension are related to events. */
        const Events = 'Events';

        /** The header and description of the PriceAdExtension are related to locations. */
        const Locations = 'Locations';

        /** The header and description of the PriceAdExtension are related to neighborhoods. */
        const Neighborhoods = 'Neighborhoods';

        /** The header and description of the PriceAdExtension are related to product categories. */
        const ProductCategories = 'ProductCategories';

        /** The header and description of the PriceAdExtension are related to product tiers. */
        const ProductTiers = 'ProductTiers';

        /** The header and description of the PriceAdExtension are related to services. */
        const Services = 'Services';

        /** The header and description of the PriceAdExtension are related to service categories. */
        const ServiceCategories = 'ServiceCategories';

        /** The header and description of the PriceAdExtension are related to service tiers. */
        const ServiceTiers = 'ServiceTiers';
    }

}
