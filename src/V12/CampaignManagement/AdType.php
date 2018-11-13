<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the type of ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adtype?view=bingads-12 AdType Value Set
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
    }

}
