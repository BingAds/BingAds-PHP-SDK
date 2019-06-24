<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a list of optional ad group criterion properties that you can request when calling GetAdGroupCriterionsByIds.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/adgroupcriterionadditionalfield?view=bingads-12 AdGroupCriterionAdditionalField Value Set
     * 
     * @used-by GetAdGroupCriterionsByIdsRequest
     */
    final class AdGroupCriterionAdditionalField
    {
        /** Request that the FinalUrlSuffix element be included within each returned BiddableAdGroupCriterion object. */
        const FinalUrlSuffix = 'FinalUrlSuffix';
    }

}
