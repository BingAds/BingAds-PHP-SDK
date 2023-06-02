<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the editorial review status values of an ad group criterion.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adgroupcriterioneditorialstatus?view=bingads-13 AdGroupCriterionEditorialStatus Value Set
     * 
     * @used-by BiddableAdGroupCriterion
     */
    final class AdGroupCriterionEditorialStatus
    {
        /** The criterion passed editorial review. */
        const Active = 'Active';

        /** The criterion failed editorial review. */
        const Disapproved = 'Disapproved';

        /** The criterion is undergoing editorial review. */
        const Inactive = 'Inactive';

        /** The criterion passed editorial review in one or more markets, and one or more elements of the criterion is undergoing editorial review in another market. */
        const ActiveLimited = 'ActiveLimited';
    }

}
