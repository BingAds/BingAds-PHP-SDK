<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines conversion goal revenue models that you can use to track how much each conversion is worth to your business.
     * @link http://msdn.microsoft.com/en-us/library/mt759556(v=msads.110).aspx ConversionGoalRevenueType Value Set
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
