<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the entity types that can be associated with an ad extension.
     * @link http://msdn.microsoft.com/en-us/library/dn249973(v=msads.110).aspx AssociationType Value Set
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
