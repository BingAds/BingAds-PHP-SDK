<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the operators that can be applied to remarketing list rule item string values.
     * @link http://msdn.microsoft.com/en-us/library/mt772368(v=msads.110).aspx StringOperator Value Set
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
