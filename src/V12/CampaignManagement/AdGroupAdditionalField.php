<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a list of optional ad group properties that you can request when calling GetAdGroupsByCampaignId and GetAdGroupsByIds.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adgroupadditionalfield?view=bingads-12 AdGroupAdditionalField Value Set
     * 
     * @used-by GetAdGroupsByCampaignIdRequest
     * @used-by GetAdGroupsByIdsRequest
     */
    final class AdGroupAdditionalField
    {
        /** Request that the FinalUrlSuffix element be included within each returned AdGroup object. */
        const FinalUrlSuffix = 'FinalUrlSuffix';
    }

}
