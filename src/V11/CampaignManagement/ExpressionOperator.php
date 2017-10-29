<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the operators that can be applied to expressions within a conversion goal.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/expressionoperator?version=11 ExpressionOperator Value Set
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
