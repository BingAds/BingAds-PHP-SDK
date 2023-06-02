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
        /** Reserved. */
        const HOUR = 'HOUR';

        /** Reserved. */
        const DAY = 'DAY';

        /** Reserved. */
        const WEEK = 'WEEK';

        /** Reserved. */
        const MONTH = 'MONTH';

        /** Reserved. */
        const LIFETIME = 'LIFETIME';
    }

}
