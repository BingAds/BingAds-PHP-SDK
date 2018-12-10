<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the possible ad extension types.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adextensionstypefilter?view=bingads-12 AdExtensionsTypeFilter Value Set
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
    }

}
