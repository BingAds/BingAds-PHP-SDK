<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible minute values for ad extension scheduling or day and time criterion.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/minute?view=bingads-13 Minute Value Set
     * 
     * @used-by DayTime
     * @used-by DayTimeCriterion
     */
    final class Minute
    {
        /** The starting or ending minute of the hour range is zero. */
        const Zero = 'Zero';

        /** The starting or ending minute of the hour range is fifteen. */
        const Fifteen = 'Fifteen';

        /** The starting or ending minute of the hour range is thirty. */
        const Thirty = 'Thirty';

        /** The starting or ending minute of the hour range is forty-five. */
        const FortyFive = 'FortyFive';
    }

}
