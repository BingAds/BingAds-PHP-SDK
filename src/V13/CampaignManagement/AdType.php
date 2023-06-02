<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the type of ad.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adtype?view=bingads-13 AdType Value Set
     * 
     * @used-by Ad
     * @used-by GetAdsByAdGroupIdRequest
     * @used-by GetAdsByEditorialStatusRequest
     * @used-by GetAdsByIdsRequest
     */
    final class AdType
    {
        /** Refers to a TextAd. */
        const Text = 'Text';

        /** Reserved for future use. */
        const Image = 'Image';

        /** Refers to a ProductAd. */
        const Product = 'Product';

        /** Refers to an AppInstallAd. */
        const AppInstall = 'AppInstall';

        /** Refers to an ExpandedTextAd. */
        const ExpandedText = 'ExpandedText';

        /** Refers to a DynamicSearchAd. */
        const DynamicSearch = 'DynamicSearch';

        /** Refers to a ResponsiveAd. */
        const ResponsiveAd = 'ResponsiveAd';

        /** Refers to a ResponsiveSearchAd. */
        const ResponsiveSearch = 'ResponsiveSearch';

        /** Refers to a HotelAd. */
        const Hotel = 'Hotel';
    }

}
