<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible operand values that can be applied to the argument of a webpage condition for dynamic search ads.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/webpageconditionoperand?view=bingads-13 WebpageConditionOperand Value Set
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

        /** Set a condition that the argument must match any of your page feed custom labels. */
        const CustomLabel = 'CustomLabel';
    }

}
