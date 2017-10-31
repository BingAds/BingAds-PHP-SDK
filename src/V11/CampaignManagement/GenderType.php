<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the genders that are available for gender criterion.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/gendertype?view=bingads-11 GenderType Value Set
     * 
     * @used-by GenderCriterion
     */
    final class GenderType
    {
        /** The gender is male. */
        const Male = 'Male';

        /** The gender is female. */
        const Female = 'Female';
    }

}
