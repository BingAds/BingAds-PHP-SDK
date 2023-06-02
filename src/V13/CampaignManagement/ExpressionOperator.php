<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the operators that can be applied to expressions within a conversion goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/expressionoperator?view=bingads-13 ExpressionOperator Value Set
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
