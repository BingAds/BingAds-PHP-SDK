<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a value set of age ranges.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/ageenum?view=bingads-13 AgeEnum Value Set
     * 
     * @used-by SelectionOfAgeEnum
     */
    final class AgeEnum
    {
        /** The age range is unknown. */
        const Unknown = 'Unknown';

        /** The age range is 0 to 12. */
        const ZeroToTwelve = 'ZeroToTwelve';

        /** The age range is 13 to 17. */
        const ThirteenToSevenTeen = 'ThirteenToSevenTeen';

        /** The age range is 18 to 24. */
        const EighteenToTwentyFour = 'EighteenToTwentyFour';

        /** The age range is 25 to 34. */
        const TwentyFiveToThirtyFour = 'TwentyFiveToThirtyFour';

        /** The age range is 35 to 49. */
        const ThirtyFiveToFourtyNine = 'ThirtyFiveToFourtyNine';

        /** The age range is 50 to 64. */
        const FiftyToSixtyFour = 'FiftyToSixtyFour';

        /** The age range is above 65. */
        const SixtyFiveAndAbove = 'SixtyFiveAndAbove';
    }

}
