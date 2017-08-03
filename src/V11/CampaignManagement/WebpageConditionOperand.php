<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the operands that can be applied to arguments of a webpage condition or criterion for dynamic search ads.
     * @link http://msdn.microsoft.com/en-us/library/mt772365(v=msads.110).aspx WebpageConditionOperand Value Set
     * 
     * @used-by WebpageCondition
     */
    final class WebpageConditionOperand
    {
        /** Reserved for future use. */
        const Unknown = 'Unknown';

        /** Set a condition that the argument must match any of your site's URLs that are indexed by Bing. */
        const Url = 'Url';

        /** Set a condition that the argument must match one of the categories that Bing thinks is applicable for your site. */
        const Category = 'Category';

        /** Set a condition that the argument must match any of your site's page titles that are indexed by Bing. */
        const PageTitle = 'PageTitle';

        /** Set a condition that the argument must match any of your site's content that is indexed by Bing. */
        const PageContent = 'PageContent';
    }

}
