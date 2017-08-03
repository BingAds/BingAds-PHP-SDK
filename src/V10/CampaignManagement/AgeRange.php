<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible age range values that you can use to target ads to users.
     * @link http://msdn.microsoft.com/en-us/library/bb671742(v=msads.100).aspx AgeRange Value Set
     * 
     * @used-by AgeTargetBid
     */
    final class AgeRange
    {
        /** Users from the ages of 18 through 24 years. */
        const EighteenToTwentyFive = 'EighteenToTwentyFive';

        /** Users from the ages of 25 through 34 years. */
        const TwentyFiveToThirtyFive = 'TwentyFiveToThirtyFive';

        /** Users from the ages of 35 through 49 years. */
        const ThirtyFiveToFifty = 'ThirtyFiveToFifty';

        /** Users from the ages of 50 through 64 years. */
        const FiftyToSixtyFive = 'FiftyToSixtyFive';

        /** Users 65 years of age and older. */
        const SixtyFiveAndAbove = 'SixtyFiveAndAbove';
    }

}
