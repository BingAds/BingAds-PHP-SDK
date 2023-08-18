<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines entity types for association and editorial service operations.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/entitytype?view=bingads-13 EntityType Value Set
     * 
     * @used-by AppealEditorialRejectionsRequest
     * @used-by DeleteLabelAssociationsRequest
     * @used-by GetEditorialReasonsByIdsRequest
     * @used-by GetLabelAssociationsByEntityIdsRequest
     * @used-by GetLabelAssociationsByLabelIdsRequest
     * @used-by SetLabelAssociationsRequest
     */
    final class EntityType
    {
        /** The entity is a campaign. */
        const Campaign = 'Campaign';

        /** The entity is an ad group. */
        const AdGroup = 'AdGroup';

        /** The entity is an ad. */
        const Ad = 'Ad';

        /** The entity is a keyword. */
        const Keyword = 'Keyword';

        /** The entity is an asset group. */
        const AssetGroup = 'AssetGroup';
    }

}
