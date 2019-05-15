<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a list of optional ad extension properties that you can request when calling GetAdExtensionsAssociations and GetAdExtensionsByIds.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adextensionadditionalfield?view=bingads-12 AdExtensionAdditionalField Value Set
     * 
     * @used-by GetAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsByIdsRequest
     */
    final class AdExtensionAdditionalField
    {
        /** Request that the FinalUrlSuffix element be included within each returned ActionAdExtension, AppAdExtension, ImageAdExtension, PriceAdExtension, and SitelinkAdExtension object. */
        const FinalUrlSuffix = 'FinalUrlSuffix';

        /** Request that the new ActionType values be included within each returned ActionAdExtension. */
        const ActionTypesPhase2 = 'ActionTypesPhase2';
    }

}
