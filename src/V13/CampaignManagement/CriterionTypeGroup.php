<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The type used to group criterions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/criteriontypegroup?view=bingads-13 CriterionTypeGroup Value Set
     * 
     * @used-by TargetSettingDetail
     */
    final class CriterionTypeGroup
    {
        /** Reserved for future use. */
        const Unknown = 'Unknown';

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

        /** Reserved for future use. */
        const IncomeRange = 'IncomeRange';
    }

}
