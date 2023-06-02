<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines values that you can use to determine whether the remarketing list can only be associated with ad groups within one specified account, or can be associated with any ad groups across all of the customer's accounts.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/entityscope?view=bingads-13 EntityScope Value Set
     * 
     * @used-by Audience
     * @used-by ConversionGoal
     * @used-by AddListItemsToSharedListRequest
     * @used-by AddSharedEntityRequest
     * @used-by DeleteListItemsFromSharedListRequest
     * @used-by DeleteSharedEntitiesRequest
     * @used-by DeleteSharedEntityAssociationsRequest
     * @used-by GetListItemsBySharedListRequest
     * @used-by GetSharedEntitiesRequest
     * @used-by GetSharedEntityAssociationsByEntityIdsRequest
     * @used-by GetSharedEntityAssociationsBySharedEntityIdsRequest
     * @used-by SetSharedEntityAssociationsRequest
     * @used-by UpdateSharedEntitiesRequest
     */
    final class EntityScope
    {
        /** The remarketing list can only be associated with ad groups within one specified account. */
        const Account = 'Account';

        /** The remarketing list can be associated with any ad groups across all of the customer's accounts. */
        const Customer = 'Customer';
    }

}
