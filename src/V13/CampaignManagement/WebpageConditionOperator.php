<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible operator values that can be applied to the argument of a webpage condition for dynamic search ads.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/webpageconditionoperator?view=bingads-13 WebpageConditionOperator Value Set
     * 
     * @used-by WebpageCondition
     */
    final class WebpageConditionOperator
    {
        /** Reserved. */
        const Unknown = 'Unknown';

        /** The property should be equal to the corresponding argument value. */
        const Equals = 'Equals';

        /** The property should contain the corresponding argument value. */
        const Contains = 'Contains';
    }

}
