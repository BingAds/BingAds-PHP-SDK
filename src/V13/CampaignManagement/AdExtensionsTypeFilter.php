<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible ad extension types.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adextensionstypefilter?view=bingads-13 AdExtensionsTypeFilter Value Set
     * 
     * @used-by GetAdExtensionIdsByAccountIdRequest
     * @used-by GetAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsByIdsRequest
     */
    final class AdExtensionsTypeFilter
    {
        /** An ad extension that contains the address and phone number of the business. */
        const LocationAdExtension = 'LocationAdExtension';

        /** An ad extension that contains a phone number and whether it's the only clickable item in an ad. */
        const CallAdExtension = 'CallAdExtension';

        /** An ad extension that contains an image with alternative text. */
        const ImageAdExtension = 'ImageAdExtension';

        /** An ad extension that contains a link to install an application from a supported app store. */
        const AppAdExtension = 'AppAdExtension';

        /** An ad extension that contains third-party reviews (exact or paraphrased) about your business, products, or services. */
        const ReviewAdExtension = 'ReviewAdExtension';

        /** An ad extension that contains additional text in the ad that can describe more about your business, products, or services. */
        const CalloutAdExtension = 'CalloutAdExtension';

        /** An ad extension that contains one site link. */
        const SitelinkAdExtension = 'SitelinkAdExtension';

        /** An ad extension that contains a header and values that tell customers more about your business. */
        const StructuredSnippetAdExtension = 'StructuredSnippetAdExtension';

        /** An ad extension that includes between 3 and 8 price table rows. */
        const PriceAdExtension = 'PriceAdExtension';

        /** An ad extension that contains a call-to-action button. */
        const ActionAdExtension = 'ActionAdExtension';

        /** An ad extension that highlights special sales and offers in your text ads. */
        const PromotionAdExtension = 'PromotionAdExtension';

        /** An ad extension that pairs one header with between 3 and 10 clickable text values that tell customers more about your business. */
        const FilterLinkAdExtension = 'FilterLinkAdExtension';

        /** An ad extension that enables advertisers to distribute product or store catalogues (flyers) to potential customers. */
        const FlyerAdExtension = 'FlyerAdExtension';

        /** An ad extension with a video and call-to-action button. */
        const VideoAdExtension = 'VideoAdExtension';

        /** Reserved. */
        const DisclaimerAdExtension = 'DisclaimerAdExtension';
    }

}
