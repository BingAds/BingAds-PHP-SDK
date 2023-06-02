<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the entity types that can be associated with an ad extension.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/associationtype?view=bingads-13 AssociationType Value Set
     * 
     * @used-by AdExtensionAssociation
     * @used-by DeleteAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionIdsByAccountIdRequest
     * @used-by GetAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsEditorialReasonsRequest
     * @used-by SetAdExtensionsAssociationsRequest
     */
    final class AssociationType
    {
        /** Refers to ad extension associations with campaigns. */
        const Campaign = 'Campaign';

        /** Refers to ad extension associations with ad groups. */
        const AdGroup = 'AdGroup';

        /** Refers to ad extension associations with accounts. */
        const Account = 'Account';
    }

}
