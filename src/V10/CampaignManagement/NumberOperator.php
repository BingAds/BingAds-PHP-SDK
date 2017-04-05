<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the operators that can be applied to remarketing list rule item number values.
     * @link http://msdn.microsoft.com/en-us/library/mt772366(v=msads.100).aspx NumberOperator Value Set
     * 
     * @used-by CustomEventsRule
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
    }

}
