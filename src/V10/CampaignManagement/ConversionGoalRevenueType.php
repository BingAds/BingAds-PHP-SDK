<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines conversion goal revenue models that you can use to track how much each conversion is worth to your business.
     * @link http://msdn.microsoft.com/en-us/library/mt759556(v=msads.100).aspx ConversionGoalRevenueType Value Set
     * 
     * @used-by ConversionGoalRevenue
     */
    final class ConversionGoalRevenueType
    {
        /** Each time it happens, the conversion has the same value. */
        const FixedValue = 'FixedValue';

        /** The value of the conversion may vary for example, by purchase price. */
        const VariableValue = 'VariableValue';

        /** Don't assign a value for the conversion. */
        const NoValue = 'NoValue';
    }

}
