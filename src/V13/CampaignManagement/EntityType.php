<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible types of entities.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/entitytype?view=bingads-13 EntityType Value Set
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
        /** Reserved for future use. */
        const Campaign = 'Campaign';

        /** Reserved for future use. */
        const AdGroup = 'AdGroup';

        /** Request editorial appeal or status for ads. */
        const Ad = 'Ad';

        /** Request editorial appeal or status for keywords. */
        const Keyword = 'Keyword';
    }

}
