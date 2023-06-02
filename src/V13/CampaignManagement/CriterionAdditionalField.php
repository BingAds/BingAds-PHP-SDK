<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional criterion properties that you can request when calling GetAdGroupCriterionsByIds and GetCampaignCriterionsByIds.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/criterionadditionalfield?view=bingads-13 CriterionAdditionalField Value Set
     * 
     * @used-by GetAdGroupCriterionsByIdsRequest
     * @used-by GetCampaignCriterionsByIdsRequest
     */
    final class CriterionAdditionalField
    {
        /** Request that the ```CriterionCashback``` element be included within each returned BiddableAdGroupCriterion or BiddableCampaignCriterion object. */
        const CriterionCashback = 'CriterionCashback';

        /** Reserved. */
        const Operator = 'Operator';
    }

}
