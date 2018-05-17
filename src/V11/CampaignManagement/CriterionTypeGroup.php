<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * The type used to group criterions.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/criteriontypegroup?view=bingads-11 CriterionTypeGroup Value Set
     * 
     * @used-by TargetSettingDetail
     */
    final class CriterionTypeGroup
    {
        /** The gender criterion type group. */
        const Gender = 'Gender';

        /** The age criterion type group. */
        const Age = 'Age';

        /** The audience criterion type group. */
        const Audience = 'Audience';

        /** The company name criterion type group. */
        const CompanyName = 'CompanyName';

        /** The job function criterion type group. */
        const JobFunction = 'JobFunction';

        /** The industry criterion type group. */
        const Industry = 'Industry';
    }

}
