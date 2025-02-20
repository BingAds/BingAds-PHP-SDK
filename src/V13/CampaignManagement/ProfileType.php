<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible types of profile criterions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/profiletype?view=bingads-13 ProfileType Value Set
     * 
     * @used-by ProfileCriterion
     * @used-by ProfileInfo
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

        /** Target people at a specific job seniority level according to LinkedIn. */
        const JobSeniority = 'JobSeniority';

        /** Target people with a specific job title according to LinkedIn. */
        const JobTitle = 'JobTitle';
    }

}
