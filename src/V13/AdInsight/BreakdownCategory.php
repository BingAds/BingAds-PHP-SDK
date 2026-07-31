<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the type of audience breakdown category.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/breakdowncategory?view=bingads-13 BreakdownCategory Value Set
     * 
     * @used-by GetAudienceBreakdownRequest
     */
    final class BreakdownCategory
    {
        /** The audience breakdown category type is All. */
        const All = 'All';

        /** The audience breakdown category type is Demographics. */
        const Demographics = 'Demographics';

        /** The audience breakdown category type is Location. */
        const Location = 'Location';

        /** The audience breakdown category type is Interest. */
        const Interest = 'Interest';

        /** The audience breakdown category type is Device. */
        const Device = 'Device';
    }

}
