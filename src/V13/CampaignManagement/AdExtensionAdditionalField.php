<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional ad extension properties that you can request when calling GetAdExtensionsAssociations and GetAdExtensionsByIds.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/adextensionadditionalfield?view=bingads-13 AdExtensionAdditionalField Value Set
     * 
     * @used-by GetAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsByIdsRequest
     */
    final class AdExtensionAdditionalField
    {
        /** Request that the Images element be included within each returned ImageAdExtension object. */
        const Images = 'Images';

        /** Request that the DisplayText element be included within each returned ImageAdExtension object. */
        const DisplayText = 'DisplayText';
    }

}
