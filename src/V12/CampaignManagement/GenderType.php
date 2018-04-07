<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the genders that are available for gender criterion.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/gendertype?view=bingads-12 GenderType Value Set
     * 
     * @used-by GenderCriterion
     */
    final class GenderType
    {
        /** Reserved for future use. */
        const Unknown = 'Unknown';

        /** The gender is male. */
        const Male = 'Male';

        /** The gender is female. */
        const Female = 'Female';
    }

}
