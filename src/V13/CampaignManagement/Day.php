<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the day values that you can specify for day and time criterion.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/day?view=bingads-13 Day Value Set
     * 
     * @used-by DayTime
     * @used-by DayTimeCriterion
     * @used-by HotelCheckInDayCriterion
     */
    final class Day
    {
        /** The day is Sunday. */
        const Sunday = 'Sunday';

        /** The day is Monday. */
        const Monday = 'Monday';

        /** The day is Tuesday. */
        const Tuesday = 'Tuesday';

        /** The day is Wednesday. */
        const Wednesday = 'Wednesday';

        /** The day is Thursday. */
        const Thursday = 'Thursday';

        /** The day is Friday. */
        const Friday = 'Friday';

        /** The day is Saturday. */
        const Saturday = 'Saturday';
    }

}
