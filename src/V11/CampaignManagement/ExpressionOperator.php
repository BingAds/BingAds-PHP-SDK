<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the operators that can be applied to expressions within a conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759561(v=msads.110).aspx ExpressionOperator Value Set
     * 
     * @used-by EventGoal
     * @used-by UrlGoal
     */
    final class ExpressionOperator
    {
        /** The property should be equal to the corresponding fixed string expression. */
        const Equals = 'Equals';

        /** The property should begin with the corresponding fixed string expression. */
        const BeginsWith = 'BeginsWith';

        /** The property should match the corresponding regular expression. */
        const RegularExpression = 'RegularExpression';

        /** The property should contain the corresponding fixed string expression. */
        const Contains = 'Contains';
    }

}
