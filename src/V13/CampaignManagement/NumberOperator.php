<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the operators that can be applied to remarketing list rule item number values.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/numberoperator?view=bingads-13 NumberOperator Value Set
     * 
     * @used-by CustomEventsRule
     * @used-by NumberRuleItem
     */
    final class NumberOperator
    {
        /** Reserved for future use. */
        const None = 'None';

        /** Equals the corresponding number value. */
        const Equals = 'Equals';

        /** Greater than the corresponding number value. */
        const GreaterThan = 'GreaterThan';

        /** Less than the corresponding number value. */
        const LessThan = 'LessThan';

        /** Greater than or equal to the corresponding number value. */
        const GreaterThanEqualTo = 'GreaterThanEqualTo';

        /** Less than or equal to the corresponding number value. */
        const LessThanEqualTo = 'LessThanEqualTo';

        /** Reserved. */
        const NotEquals = 'NotEquals';
    }

}
