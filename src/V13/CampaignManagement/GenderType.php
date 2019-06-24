<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the genders that are available for gender criterion.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/gendertype?view=bingads-13 GenderType Value Set
     * 
     * @used-by GenderCriterion
     */
    final class GenderType
    {
        /** The gender is not known. */
        const Unknown = 'Unknown';

        /** The gender is identified as male. */
        const Male = 'Male';

        /** The gender is identified as female. */
        const Female = 'Female';
    }

}
