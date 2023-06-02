<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the genders that are available for gender criterion.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/gendertype?view=bingads-13 GenderType Value Set
     * 
     * @used-by GenderCriterion
     * @used-by GenderDimension
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
