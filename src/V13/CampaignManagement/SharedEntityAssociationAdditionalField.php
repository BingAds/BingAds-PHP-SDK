<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the shared entity association additional field value set.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/sharedentityassociationadditionalfield?view=bingads-13 SharedEntityAssociationAdditionalField Value Set
     * 
     * @used-by GetSharedEntityAssociationsByEntityIdsRequest
     * @used-by GetSharedEntityAssociationsBySharedEntityIdsRequest
     */
    final class SharedEntityAssociationAdditionalField
    {
        /** Request that brand list fields be included with each returned shared entity association. */
        const BrandListFields = 'BrandListFields';
    }

}
