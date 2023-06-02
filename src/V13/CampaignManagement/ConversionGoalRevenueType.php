<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines conversion goal revenue models that you can use to track how much each conversion is worth to your business.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/conversiongoalrevenuetype?view=bingads-13 ConversionGoalRevenueType Value Set
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
