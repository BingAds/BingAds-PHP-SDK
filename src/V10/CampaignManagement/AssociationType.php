<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the entity type or types associated with an ad extension.
     * @link http://msdn.microsoft.com/en-us/library/dn249973(v=msads.100).aspx AssociationType Value Set
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
        /** Specifies ad extension associations with campaigns. */
        const Campaign = 'Campaign';

        /** Specifies ad extension associations with ad groups. */
        const AdGroup = 'AdGroup';

        /** Reserved for future use. */
        const Account = 'Account';
    }

}
