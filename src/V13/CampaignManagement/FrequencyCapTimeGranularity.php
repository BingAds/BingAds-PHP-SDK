<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible values for FrequencyCapTimeGranularity.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/frequencycaptimegranularity?view=bingads-13 FrequencyCapTimeGranularity Value Set
     * 
     * @used-by FrequencyCapSettings
     */
    final class FrequencyCapTimeGranularity
    {
        /** The number of hours to limit ad serves by. */
        const HOUR = 'HOUR';

        /** The number of days to limit ad serves by. */
        const DAY = 'DAY';

        /** The number of weeks to limit ad serves by. */
        const WEEK = 'WEEK';
    }

}
