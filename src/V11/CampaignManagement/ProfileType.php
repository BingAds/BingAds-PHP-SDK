<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible types of profile criterions.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/profiletype?view=bingads-11 ProfileType Value Set
     * 
     * @used-by ProfileCriterion
     * @used-by GetProfileDataFileUrlRequest
     */
    final class ProfileType
    {
        /** Target people at a specific company according to LinkedIn. */
        const CompanyName = 'CompanyName';

        /** Target people in a specific job function according to LinkedIn. */
        const JobFunction = 'JobFunction';

        /** Target people in a specific industry according to LinkedIn. */
        const Industry = 'Industry';
    }

}
