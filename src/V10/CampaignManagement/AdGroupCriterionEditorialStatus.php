<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the editorial review status values of an ad group criterion.
     * @link http://msdn.microsoft.com/en-us/library/dn195643(v=msads.100).aspx AdGroupCriterionEditorialStatus Value Set
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
