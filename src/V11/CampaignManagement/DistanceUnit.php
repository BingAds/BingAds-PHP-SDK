<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible distance units of a geographical location.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/distanceunit?view=bingads-11 DistanceUnit Value Set
     * 
     * @used-by RadiusCriterion
     */
    final class DistanceUnit
    {
        /** The distance of the specified geographical location is specified in miles. */
        const Miles = 'Miles';

        /** The distance of the specified geographical location is specified in kilometers. */
        const Kilometers = 'Kilometers';
    }

}
