<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the operators that can be applied to remarketing list rule item string values.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/stringoperator?view=bingads-13 StringOperator Value Set
     * 
     * @used-by CustomEventsRule
     * @used-by StringRuleItem
     */
    final class StringOperator
    {
        /** Reserved for future use. */
        const None = 'None';

        /** Equals the corresponding string value. */
        const Equals = 'Equals';

        /** Contain the corresponding string value. */
        const Contains = 'Contains';

        /** Begin with the corresponding string value. */
        const BeginsWith = 'BeginsWith';

        /** Does not end with the corresponding string value. */
        const EndsWith = 'EndsWith';

        /** Does not equal the corresponding string value. */
        const NotEquals = 'NotEquals';

        /** Does not contain the corresponding string value. */
        const DoesNotContain = 'DoesNotContain';

        /** Does not begin with the corresponding string value. */
        const DoesNotBeginWith = 'DoesNotBeginWith';

        /** Does not end with the corresponding string value. */
        const DoesNotEndWith = 'DoesNotEndWith';
    }

}
