<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the company size category object.
     * @link https://learn.microsoft.com/en-us/advertising/campaign-management-service/companysizecategory?view=bingads-13 CompanySizeCategory Value Set
     * 
     * @used-by LinkedInCompanyData
     */
    final class CompanySizeCategory
    {
        /** The company size is unknown. */
        const Unknown = 'Unknown';

        /** The company size is myself only. */
        const MyselfOnly = 'MyselfOnly';

        /** The company size is 2-10. */
        const Size2To10 = 'Size2To10';

        /** The company size is 1-50. */
        const Size11To50 = 'Size11To50';

        /** The company size is 51-200. */
        const Size51To200 = 'Size51To200';

        /** The company size is 201-500. */
        const Size201To500 = 'Size201To500';

        /** The company size is 501-1000. */
        const Size501To1000 = 'Size501To1000';

        /** The company size is 1001-5000. */
        const Size1001To5000 = 'Size1001To5000';

        /** The company size is 5001-10000. */
        const Size5001To10000 = 'Size5001To10000';

        /** The company size is more than 10001. */
        const Size10001Plus = 'Size10001Plus';
    }

}
