<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional ad extension properties that you can request when calling GetAdExtensionsAssociations and GetAdExtensionsByIds.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adextensionadditionalfield?view=bingads-13 AdExtensionAdditionalField Value Set
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

        /** Request that the Layouts element be included within each returned ImageAdExtension object. */
        const Layouts = 'Layouts';

        /** Request that the latest ActionAdExtensionActionType values be included within each returned ActionAdExtension. */
        const ActionTypesPhase3 = 'ActionTypesPhase3';

        /** Request that the latest ActionAdExtensionActionType values be included within each returned ActionAdExtension. */
        const ActionTypesPhase4 = 'ActionTypesPhase4';

        /** Reserved. */
        const NewFilterLinkHeaders = 'NewFilterLinkHeaders';
    }

}
